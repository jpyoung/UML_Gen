<?php
/////////////////////////////////////////////////////////////////////////////
//
// Mapper.php
//
// Jack Young <jpyoung17@gmail.com
//
// Mapper class is used take the array which was parsed by the parser.php file
// break it down into sub components by making use of the javafile.php data object
//
/////////////////////////////////////////////////////////////////////////////

// require 'javafile.php';
// require 'ParamInterweaver.php';
require_once APPPATH . 'models/algo_a/ParamInterweaver.php';
require_once APPPATH . 'models/algo_a/javafile.php';
//require "lazy_scripting.php";

class Mapper {
  
  var $parsed_base_file;
  var $show_error_checking = false;
  
  var $used_up_indexes;
  
  //constructor for the Mapper object.  Accepts the parsed file array
  function __construct($passed_file_array) {
    $this->parsed_base_file = $passed_file_array;
    $this->used_up_indexes = array();
  }
  
  function mapper_controller() {
    
     $class_name = $this->retrieve_class_name();
    
     $javaF = new Javafile();
    
     //setting the objects class name
     $javaF->set_object_name($class_name);

     //retrieve and set the object class fields
     $this->retrieve_class_fields($javaF);
      
     //retrieve and set the object class constructors
     $this->retrieve_class_constructors($class_name, $javaF);
     
     //used to retrieve and set the object class methods
     $this->retrieve_class_methods($javaF);
     
     
     if ($this->show_error_checking) {
       echo "<hr>";
       echo "<hr><h3>Sample output for instance var</h3>";
       print_r($javaF->return_as_array());
       echo "<hr>";
     }
     
     $completed_javaFile = $this->launch_param_interweaver_parse($javaF);
     
     //producing the UML table for the parse out and mapped file
     //echo $this->return_as_UML_Table($javaF->return_as_array());
     
     //returning the produced UML table
     return $this->return_as_UML_Table($completed_javaFile);
    
  }
  
  
  function launch_param_interweaver_parse($javaF) {
    
    $jf = $javaF->return_as_array();
    
    $param_interweaver = new ParamInterweaver();
    
    //looping through the object constructor methods and using the parameterInterweaver class. 
    for ($x = 0; $x < count($jf['object_constructors']); $x++ ) {
        $tempA = $jf['object_constructors'][$x];
        if ( $tempA['constructor_has_parameters'] == 1) {
          //echo "<h1>It has Parameters</h1>";
          $tempV = $param_interweaver->parameter_interweaver_controller($tempA['constructor_parameters']);
          $jf['object_constructors'][$x]['constructor_parameters'] = $tempV; 
        } else {
          //echo "<h1>No Parameters</h1>";
        }
    }
    
    //looping through the object methods and using the parameterinterweaver class
    for ( $y = 0; $y < count($jf['object_methods']); $y++ ) {
      $tempA = $jf['object_methods'][$y];
      if ( $tempA['method_has_parameters'] == 1) {
        //echo "<h1>Method has Parameters</h1>";
        $tempV = $param_interweaver->parameter_interweaver_controller($tempA['method_parameters']);
        $jf['object_methods'][$y]['method_parameters'] = $tempV;
      } else {
        //echo "<h1>Method No Parameters</h1>";
      }
    }

    return $jf;    
  }
  
  
  //this function will be called to return the java file as a UML table
  function return_as_UML_Table($jf) {
    
    $s = '<table border="1">';
    $s .= "<tr><th>" . $jf['object_name']. "</th></tr>";
    
    $s .= "<tr>";
    $s .= "<td>";
      for ( $k = 0; $k < count($jf['object_fields']); $k++) {
        
        $s .= "<p>" . $this->print_UML_instant_var($jf['object_fields'][$k]) . "</p>"; 
       
      }
    $s .= "</td>";
    $s .= "</tr>";
    
    $s .= "<tr>";
    $s .= "<td>";
    
    for ($g = 0; $g < count($jf['object_constructors']); $g++) {
      $s .= "" . $this->print_UML_class_constructor($jf['object_constructors'][$g]);
    }
    
    for ( $k = 0; $k < count($jf['object_methods']); $k++) {
    
      $s .= "" . $this->print_UML_class_method($jf['object_methods'][$k]) . "";
       
    }
    $s .= "</td>";
    $s .= "</tr>";
    
    $s .= "</table>";
    
    return $s;
    
  }
  
  
  function print_UML_class_constructor($c) {
    $outS = "";
    
    $outS .= '&lt;' . '&lt;' . 'constructor' . '&gt;' . '&gt;';
    $outS .= $c['constructor_name'];
    $outS .= $c['constructor_parameters'];
     
    $wrapper = "";
    
    $wrapper = "<p>" . $outS . "</p>";
    
   return $wrapper;
    
  }
  
  //function is used to output print the UML notation for the passed in method
  function print_UML_class_method($m) {
    $outS = "";
   
    $modifier = $m['method_modifier'];
   
    if ($modifier == "public") {
      $outS .= "+";
    } else if ($modifier == "private") {
      $outS .= "-";
    } else if ($modifier == "protected") {
      $outS .= "#";
    }
    
    $outS .= $m['method_name'];
    $outS .= $m['method_parameters'];
    $outS .= ": " . $m['method_return_type'];
    
    
    $wrapper = "";
    if ($m['method_is_static'] == 1) {
      //method has a static declar, so it should be underline
      $wrapper = '<p style="text-decoration:underline">' . $outS . "</p>";
    } else {
      //method does not have a static declar, so it should not be underline.  
      $wrapper = '<p>' . $outS . "</p>";
    }
    
    
    return $wrapper;
    
  }
  
  
  //function is used to print out the UML notation for the passed in instance variable. 
  function print_UML_instant_var($iv) {
      $outS = "";
      
      $fm = $iv['field_modifier'];
      
      if ($fm == "public") {
        $outS .= "+";
      } else if ($fm == "private") {
        $outS .= "-";
      } else if ($fm == "protected") {
        $outS .= "#";
      }
      
      $outS .= $iv['field_name'];
      $outS .= " " . $iv['field_type'];
      
      return $outS;
  }
  
  
  ///problem in the retireve class method need to figure out a way to explode the array without messageing with parameters
  
  //function is used to retrieve and set the javaFile object class method variables. 
  function retrieve_class_methods($javaF) {
    
      $m_indexes = $this->used_up_indexes;
      
      if ($this->show_error_checking) {
      echo "<h1>Key indexes Used</h1>";
      print_r($this->used_up_indexes);
      echo "<br/>";
      print_r($m_indexes);
      echo "<hr>";
      }
      
      for ($i = 0; $i < count($this->parsed_base_file); $i++) {
        
            if (!in_array($i, $m_indexes)) {
              //i was not found in the m_indexes array.  Therefor its not been used, so its probably a method
                $holder = $this->parsed_base_file[$i];
                
                if ($this->show_error_checking) {
                  //print_r($holder);
                  //echo "<br/>";
                }
                
                     
                //finding the indexes so that I can do a substring
                $openB = strpos($holder, "(");
                $closeB = strpos($holder, ")");
                $params = substr($holder, $openB, ($closeB - $openB)+1);
                
                $has_pa = false;
                if(strlen($params) > 2) {
                  $has_pa = true;
                }
                
              
               
                //exploding it from a substring, ending at the index of (
                $tempVE = explode(" ", substr($holder, 0, $openB));
                
                if ($this->show_error_checking) {
                  //echo "<h3>Printing array after explode in the retrieve class methods function</h3>";
                  //print_r($tempVE);
                }
                
                if ($this->does_have($holder, "static")) {
                  
                  $javaF->insert_object_class_method($tempVE[0], true, $tempVE[2], $tempVE[3], $has_pa, $params);
                } else {
                  //does not have a static declar
                  $javaF->insert_object_class_method($tempVE[0], false, $tempVE[1], $tempVE[2], $has_pa, $params);
                }
                
                
            }
        
            
      }
      
  }
  
  //used to see if a string contains a certain substring
  //such as if the string contains "static"
  function does_have($s, $match) {
   	$h = explode(" ", $s);
    
   	$found = false;
   	for ( $x = 0; $x < count($h); $x++ ) {
   	  
   	  if ($h[$x] == $match) {
   	    //echo "Equal";
   	    $found = true;
   	  } 
   	}
   	return $found;
  }
  

  
  //used to find the indexes of the methods. ie everything that wasnt use so far in the array
  function find_indexes_of_methods() {
        $classIndex = 0;
        $used_indexes = array();
        $used_indexes[] = $classIndex;
        //$used_indexes[] = $this->find_indexs_of_fields();
        
        //merging the array
        //$combinedArr = array_merge($used_indexes, $this->find_indexs_of_fields());
        
        echo "<p>Find INdexes of methods called</p>";
        print_r($this->used_up_indexes);
        echo "<br/>";
        //$this->used_up_indexes = $combinedArr;
        
        //$tempIndexes = array_merge($this->used_up_indexes, $combinedArr);
        //$this->used_up_indexes = $tempIndexes;
        
        print_r($this->used_up_indexes);
        echo "<p>END</p>";
        
        return $combinedArr;
  }
  
  
  //Function is used to retrieve and set the javaFile object class field variables.  
  function retrieve_class_fields($javaF) {
      $indexes_of_found_fields = $this->find_indexs_of_fields();
      
      if (count($indexes_of_found_fields) > 0) {
          for ($i = 0; $i < count($indexes_of_found_fields); $i++) {

                $holder = $this->parsed_base_file[$indexes_of_found_fields[$i]];
                $tempVE = explode(" ", $holder);
                
                $javaF->insert_object_class_field($tempVE[0], $tempVE[1], $tempVE[2]);  //inserting the java object field attributes
              //$javaF->insert_object_class_field("public", "String", "make");
          }
      }
  }
  
  //function is used to find indexes of the field variables.  Its look for lines that end
  //with the ; sign.  If finds one it addes it to an array.
  function find_indexs_of_fields() {
      
      $found_indexes = array();
      for ($i = 0; $i < count($this->parsed_base_file); $i++) {
        
        if ($this->does_contain($this->parsed_base_file[$i], ";") && $this->is_semicolon_at_end($this->parsed_base_file[$i])) {
          //yess
          //echo "fiof yes: index: " . $i . " for string: " . $this->parsed_base_file[$i] . " " . $this->is_semicolon_at_end($this->parsed_base_file[$i]) . "<br/>";
          $found_indexes[] = $i;
        } else{
          //nooo
        }
      }
      
      $tempA_holder = array_merge($this->used_up_indexes, $found_indexes);
      $this->used_up_indexes = $tempA_holder;
      
      
      return $found_indexes;
  }
  
  //used to see if the semicolon is at the end of the line. good - public String farm;
  //bad: public Outer(String name; String yard
  function is_semicolon_at_end($s) {
    $length = strlen($s);
    $position = strpos($s, ";");
    //return "length: " . $length . " position: " . $position . "";
    
    if ( $position == ($length - 1 )) {
      return true;
    } else {
      return false;
    }
    
  }
  
  //helper function
  function does_contain($s, $match) {
    $f = strrchr($s, $match);
    if ($f) {
      return true;
    } else {
      return false;
    }
  }
  
 
  
  //function is used to figure out and retrieve the class name of the parsed file
  function retrieve_class_name(){
    
    $result_index = $this->find_index_of_class_declaration();
    if ($result_index == -1) {
      //didnt find it, return index 0 by default
      return $this->parsed_base_file[0];
    } else {
      //found it
      $tempVE = explode(" ", $this->parsed_base_file[$result_index]);
      return $tempVE[2];
    }  
  }
  
  
  function find_index_of_class_declaration() {
    
     //public class
     
      $found_index = -1;
      for ($i = 0; $i < count($this->parsed_base_file); $i++) {

        $tempVE = explode(" ", $this->parsed_base_file[$i]);
        
        //making sure its not just an empty array index with atleast three elements. ie should be public class something
        if (count($tempVE) == 3) {
            if ($tempVE[0] == "public" && $tempVE[1] == "class") {
              //found the first line of the java file
              $found_index = $i;
            }
        }
        
        
      }
     
    if ($found_index > -1) {
      //adding the found index to the used up indexes array
      $this->used_up_indexes[] = $found_index;
    }
    
    return $found_index;

  }
  
 
 
   
  
  //used to retrieve the class constructores, accepts the class name, and the javaF data structure object
  function retrieve_class_constructors($nameOfClass, $javaF) {
    
      $found_constructor_indexes = $this->find_indexes_of_class_constructors($nameOfClass);
      
      if ($this->show_error_checking) {
        echo "<hr>";
        echo "<hr><h3>retrieve Class Construcotr : " . $nameOfClass . "</h3>";
        print_r($found_constructor_indexes);
        echo "<hr>";
      }
      
      //checking to see if it found any constructors
      if ($found_constructor_indexes) {
        //array is not empty
        //$this->p("Constructors were found");
       
        //looping through the parsed_base_file array
        for ( $rr = 0; $rr < count($this->parsed_base_file); $rr++) {
          
          //if the index occurs in the found constructor indexes, its a constructor index so use it. 
          if (in_array($rr, $found_constructor_indexes)) {
            $holder = $this->parsed_base_file[$rr];
            
            $openB = strpos($holder, "(");
            $closeB = strpos($holder, ")");
            $params = substr($holder, $openB, ($closeB - $openB)+1);
            
            //h1_c($params, "blue");
            
            $has_pa = false;
            if(strlen($params) > 2) {
              $has_pa = true;
            }
            
            //exploding it from a substring, ending at the index of (
            $tempVE = explode(" ", substr($holder, 0, $openB));
            
            //print_r($tempVE);
            
            
            
            $javaF->insert_object_class_constructor($tempVE[0], $tempVE[1], $has_pa, $params);
            
          }
        }
       
        
        //$javaF->insert_object_class_field($tempVE[0], $tempVE[1], $tempVE[2]);
      } else {
        //array is empty, not constructors were found
        //$this->p("Not constructors were found");
      }
     
  }
  

  
  //used to find the indexes of the class constructors, accepts the class name
  //index 0 should be the access modifer public.  index 1 should be the constructor name
  //example: public Outer().  We are specify that all constructor should start with public
  function find_indexes_of_class_constructors($nameOfClass) {
  
      $used_indexes = array();
      
      for ( $y = 0; $y < count($this->parsed_base_file); $y++ ) {
        $tempVE = explode(" ", $this->parsed_base_file[$y]);
        $removed_parenth_string = $this->remove_parameter_section($tempVE[1]);  //removing the parethesis before if match to name of class 

          if ($tempVE[0] == "public" && $removed_parenth_string == $nameOfClass) {
            //echo "<h1>Constructor found at index: " . $y . "</h1>";
            $used_indexes[] = $y;
          } 
      }
      
      
      //echo "<hr><hr>";
      $temp_index_array = array_merge($this->used_up_indexes, $used_indexes);
     // print_r($temp_index_array);
     //print_r($temp_index_array);
     $this->used_up_indexes = $temp_index_array;
      
      return $used_indexes;
  }
  
  //function is used to remove the parameter section
  //ex: public Outer()  it would return public Outer
  //accepts the string ur looking in
  //if it doesnt find the ( then it returns the passed in string as default
  function remove_parameter_section($s) {
      $left_parenthesis = strpos($s, "(");
      
      if ($left_parenthesis) {
        //echo "found it : " . $left_parenthesis;
        $tempSub = substr($s, 0, $left_parenthesis);
        return $tempSub;
      
      } else {
        //echo "not found";
        return $s;
      }
      
  }
  
  
  
}