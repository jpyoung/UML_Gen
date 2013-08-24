<?php
/////////////////////////////////////////////////////////////////////////////
//
// ParamInterweaver.php
//
// Jack Young <jpyoung17@gmail.com
//
// ParamInterweaver class is used to take a passed in parameter string and return it
// as a UML notation string.  This class is called from the Mapper.php page.
//
// Example 1:  Passed in string = "(int max, int min)"
//             return result is = "(max: int, min: int)"
// Example 2:  Passed in string = "(int age)"
//             return result is = "(age: int)"
//
//
/////////////////////////////////////////////////////////////////////////////

class ParamInterweaver {
  
  /**
   * The parameter_interweaver_controller function is the main function in the ParamInterweaver
   * class.  This is the function that an outside class should call to get the parameter string
   * in the UML notation style.  This function accepts the main parameter string, and it should
   * the string in the UML notation format.  
   * 
   * @param $main
   * @return string
   */
  function parameter_interweaver_controller($main) {
  
    //Find the parentheses brackets s1
    $parenthese_indexes = $this->find_parameter_parentheses($main);
  
    //remove left and right parentheses s2
    $removed_parentheses = $this->remove_parentheses($main);
  
    $main = $removed_parentheses; //reseting the main string to removed_parenthese string.
  
    //Find Parameter Spaces  s3
    $param_space_indexes = $this->find_parameter_spaces($main, $parenthese_indexes);
  
    //Does parameter contain a comma  s4
    $have_comma = $this->does_parameter_contain_comma($main);
  
  
    //flipped the parameters around, removed comma if one exists  s5
    $pass1 = $this->switcheroo($main);
    $main = $pass1;  //resetting the main string to the string in which the switcheroo method was used on
  
    //re insert commas back into the parameters s6
    $resulting_string = $this->re_insert_commas($main, $have_comma, $param_space_indexes);
  
    //outputting the final result
    //h1_c($resulting_string, "blue");
    
    //returning the final resulting string
    return "(" . $resulting_string . ")";
  
  }
  
  /**
   * The find_parameter_parentheses function accepts the main parameter string,
   * It then searches for index locations of the parentheses in the string.  If
   * It finds one, the index is inserted into the p_indexs array.  This function 
   * returns an array of indexs.  [s1]
   * 
   * @param $line
   * @return array 
   */
  function find_parameter_parentheses($line){
    $p_indexs = array();
    $c = str_split($line);
    for ( $k = 0; $k < count($c); $k++ ) {
      if ($c[$k] == "(" || $c[$k] == ")") {
        $p_indexs[] = $k;
      }
    }
    return $p_indexs;
  }
  
  /**
   * The remove_parentheses function is used to simply remove the left and right parentheses
   * from the passed in main parameter string.  [s2]
   * 
   * @param $line
   * @return string
   */
  function remove_parentheses($line) {
    $tempFirst = str_replace('(', '', $line);
    $tempSecond = str_replace(')', '', $tempFirst);
    return $tempSecond;
  }
  
  /**
   * The find parameter spaces function is used to find the spaces in the parameter string.
   * It accepts the main parameter string and the array of parenthese_indexes.  [s3]
   * 
   * @param $line
   * @param $parenthese_indexes
   * @return array 
   */
  function find_parameter_spaces($line, $parenthese_indexes) {
    $p_indexs = array();
    $c = str_split($line);
    for ( $k = 0; $k < count($c); $k++ ) {
      if ($k >= $parenthese_indexes[0] && $k <= $parenthese_indexes[count($parenthese_indexes) - 1]) {
        if ($c[$k] == " ") {
          $p_indexs[] = $k;
        }
      }  
    }
    return $p_indexs;
  }
  
  /**
   * The does_parameter_contain_comma function checks to see if the passed in parameter string contains
   * a comma or commas.  If it finds a comma, it addes the index location of the found comma to the 
   * comma_indexes array.  [s4] 
   * 
   * @param $line
   * @return array 
   */
  function does_parameter_contain_comma($line) {
    $s = str_split($line);
    $comma_indexes = array();
    for ( $y = 0; $y < count($s); $y++ ) {
      if ( $s[$y] == ',') {
        $comma_indexes[] = $y;
      }
    }
    return $comma_indexes;
  }
  
  /**
   * The is_even_or_zero function accepts a number as a parameter.  The function will return true
   * if the passed in number is even or is zero.  It will return false if the number is odd.  This
   * function is primarily used in the switcheroo, so that it can split the parameter string into 
   * even and odd arrays.  [s5]
   * 
   * @param $h 
   * @return boolean
   */
  function is_even_or_zero($h) {
    if ($h == 0) {
      return true;
    }
    if ($h % 2 == 0) {
      return true;
    } else {
      return false;
    }
  }
  
  /**
   * This function accepts the main parameter string and switches around the parameter var names
   * and var types.  After switching them around, it returns the result as a string. [s5]
   * Example 1: passed in string = (int max, int min)
   *            resulting string = (max, int min, int)
   * @param $ma
   * @return mixed
   */
  function switcheroo( $ma ) {
    $temp_h = explode(' ', $ma);
    $even_side = array();
    $odd_side = array();
    for ( $f = 0; $f < count($temp_h); $f++ ) {
      if ($this->is_even_or_zero($f)) {
        //even or zero index number
        $even_side[] = $temp_h[$f];
      } else {
        //odd index number
        $odd_side[] = $temp_h[$f];
      }
    }
    $interweave = array();
    for ( $w = 0; $w < count($even_side); $w++ ) {
      $interweave[] = $odd_side[$w] . ":";
      $interweave[] = $even_side[$w];
    }
    //converting the array back into a string
    $array_to_string = implode(" ", $interweave);
    $array_to_string = str_replace(',', '', $array_to_string);
    return $array_to_string;
  }
  
  /**
   * This function is used to insert commas back into the switched around parameter string.
   * The resulting string is returned to the controller method.  [s6]
   * @param $main
   * @param $have_comma
   * @param $param_space_indexes
   * @return re_configured_string
   */
  function re_insert_commas($main, $have_comma, $param_space_indexes) {
    $final_result = array();
    if ( $have_comma && $param_space_indexes) {
      //yes it had a comma
      $str_apart = str_split($main);
      for ( $b = 0; $b < count($str_apart); $b++ ) {
        if ( $str_apart[$b] == ' ' ) {
          if ( $str_apart[ $b - 1 ] != ':') {
            //inserting the comma where appropriate
            $final_result[] = ",";
            $final_result[] = " ";
          } else {
            $final_result[] = $str_apart[$b];
          }
        } else {
          $final_result[] = $str_apart[$b];
        }
      }
    } else {
      //no comma or param space indexes is empty found
      return $main;
    }
    //converting the char array back to a string array
    $re_configured_string = "";
    for ( $xx = 0; $xx < count($final_result); $xx++ ) {
      $re_configured_string .= $final_result[$xx];
    }
    //returning the final configured string
    return $re_configured_string;
  }
  
  
}

?>