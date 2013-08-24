<?php
/////////////////////////////////////////////////////////////////////////////
//
// parser.php
//
// Jack Young <jpyoung17@gmail.com
// Brian McVeigh <bcmcveigh@gmail.com>
//
// Parser is used to parsed the array text file
//
/////////////////////////////////////////////////////////////////////////////


class Parser {
  
    var $start_file;
    var $parsed_file;

	private $CI;
    
    //constructor for the parser object.  Accepts the file array
	function __construct() {
		$this->CI =& get_instance();
	}
	
    function mim_Parser($passed_file_array) {
      $this->start_file = $passed_file_array;
      $this->parsed_file = array();
    }
      
    //when this function is called it launches the parse file sequence
    function parse_controller(){
      
      //removing the empty lines in the array
      $this->parsed_file = $this->remove_empty_lines($this->get_start_file());
      
      //removing the right bracket in the array
      $this->parsed_file = $this->remove_right_bracket_lines($this->get_parsed_file());
      
      //removing the left bracket in the array when stand alones
      $this->parsed_file = $this->remove_left_bracket_lines($this->get_parsed_file());
      
      //removing the none access modifier lines in the array
      $this->parsed_file = $this->remove_none_access_modifier_lines($this->get_parsed_file());
      
      //removing all the remaining left braces { from the array. ie class declarations and methods
      $this->parsed_file = $this->remove_all_remaining_braces($this->get_parsed_file());
      
    }
  

    //Removes the emplty lines in the passed in array
	function remove_empty_lines($passed_file_array) {
		$tempArr = array();
		for ($i = 0; $i < count($passed_file_array); $i++) {
			if ($passed_file_array[$i] != "") {
				$tempArr[] = $passed_file_array[$i];
			}
		}
		return $tempArr;	
	}
	
	
	//removes the right brackets from the array
	function remove_right_bracket_lines($passed_file_array){
	  $tempArr = array();
	  for ($i = 0; $i < count($passed_file_array); $i++) {
	    if ($passed_file_array[$i] != "}") {
	      $tempArr[] = $passed_file_array[$i];
	    }
	  }
	  return $tempArr;
	}
	
	//removes the left brackets from the array when its on its own line. 
	//example:
	// public get()
	// {
	function remove_left_bracket_lines($passed_file_array) {
	  $tempArr = array();
	  for ($i = 0; $i < count($passed_file_array); $i++) {
	    if ($passed_file_array[$i] != "{") {
	      $tempArr[] = $passed_file_array[$i];
	    }
	  }
	  return $tempArr;
	}
	
	
	
	//this function is used to remove any lines in a array that does not start with a valid access modifier (ie public private protected)
	function remove_none_access_modifier_lines($passed_file_array) {
	   $tempArr = array();
	   for ($x = 0; $x < count($passed_file_array); $x++) {
	       if ($this->has_access_modifier($passed_file_array[$x])) {
	          $tempArr[] = $passed_file_array[$x]; 
	       }
	   }
	   return $tempArr;
	}
	
	
	//function is used to check whether or not the passed in line contains a valid access
	//modifier as the first word in a given line. 
	function has_access_modifier($single_line) {
	   
	  $valid_access_modifiers = Array("Public", "Private", "Protected");
	   
	  $tempV = $single_line;
	  
	  //breaking up the single_line by spaces into an array
	  $tempV_array = explode(" ", $tempV);
	   
	  if (count($tempV_array) > 1) {
	    if ($this->in_array_case_insensitive($tempV_array[0], $valid_access_modifiers)) {
	      //found a match
	      return true;
	    } else {
	      //did not find a match
	      return false;
	    }
	  } else {
	    //the exploded array has either just one word or none, either way not valid
	    return false;
	  }
	  
	}
	
	// function is used to carry out a case insensitive in_array() search;
	//It is very much like PHP in_array() Case sensitive search.
	function in_array_case_insensitive($needle, $haystack) {
	  return in_array( strtolower($needle), array_map('strtolower', $haystack) );
	}
	
    //This function is used to remove the remaining braces { in each index of the array
    function remove_all_remaining_braces($passed_file_array) {
      $tempArr = array();
      for ($i = 0; $i < count($passed_file_array); $i++) {
          $tempArr[] = $this->remove_brace_from_declaration($passed_file_array[$i]);
      }
      return $tempArr;
    }
	
	//function is used to remove the right brace after the object class declaration or method declarations
	//returns the a new string without the brace, if it didnt find the brace it returns
	//the original string that was passed in.
	function remove_brace_from_declaration($line) {
	
	  $tempL = $line;
	
	  if (strlen($tempL) > 0) {
	    if ($this->does_contain($tempL, "{")) {
	      //"not empty and found brace"
	      $temper = str_replace("{", "", $tempL);  //taking the string and replacing the bracket with empty char
	      $tempL = trim($temper); //taking the string and triming the trailing white slash empty spaces.
	    } else {
	      //echo "not empty but doesn't have the brace<br/>";
	    }
	  } else {
	    //its a empty string
	    //echo "its empty string<br/>";
	  }
	  return $tempL;
	}
	
	//The does contain method is used to check whether or not a string contains a substring
	//first para is the string you want to search and second para is the thing your looking to match
	function does_contain($s, $match) {
	  $f = strrchr($s, $match);
	  if ($f) {
	    return true;
	  } else {
	    return false;
	  }
	}
	

	//getters
	function get_start_file() {
	  return $this->start_file;
	}
	
	function get_parsed_file() {
	  return $this->parsed_file;
	}
	
	
}

?>