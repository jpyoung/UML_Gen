<?php
/////////////////////////////////////////////////////////////////////////////
//
// javaFile.php
//
// Jack Young <jpyoung17@gmail.com
//
// Javafile is the base line data structure used in this application
//
/////////////////////////////////////////////////////////////////////////////

class Javafile {
  
    var $object_name;
    var $object_class_constructors;
    var $object_class_fields;
    var $object_class_methods;
    
    var $field_counter = 1;
    var $method_counter = 1;
    var $constructor_counter = 1;
    
	private $CI;

    //constructor for the parser object.  Accepts the file array
	function __construct() {
		$this->CI =& get_instance();
	}
	
    function mim_Javafile() {
      $this->object_name = "";
      $this->object_class_constructors = array();
      $this->object_class_fields = array();
      $this->object_class_methods = array();
    }
    
    /**
     * @return object_name 
     */
    function get_object_name() {
      return $this->object_name;
    }
    
    /**
     * @return object_class_fields array
     */
    function get_object_class_fields() {
      return $this->object_class_fields;
    }
       
    /**
     * @return object_class_methods array
     */
    function get_object_class_methods() {
      return $this->object_class_methods;
    }
       
    /**
     * @return object_class_constructors array
     */
    function get_object_class_constructors() {
      return $this->object_class_constructors;
    }
    
    /**
     * @param name of the object
     */
    function set_object_name($v) {
      $this->object_name = $v;
    }
    
    /**
     * Inserting java instance variable declaration
     * 
     * @param $fmod
     * @param $ftype
     * @param $fname
     */
    function insert_object_class_field($fmod, $ftype, $fname) {
      
      $tempAr = array("field_num" => $this->field_counter, "field_modifier" => $fmod, "field_type" => $ftype, "field_name" => $fname);
      
      //incrementing the field counter variable
      $this->field_counter++;
      
      $this->object_class_fields[] = $tempAr;
    }
    
    /**
     * This function is used to insert object class method into the object_class_methods array.
     * paras: Accepts the method access modifier, boolean is static or not, method return type, method name, boolean
     * has para (if true it has method para, and method parameters. 
     * 
     * @param  $m_modifier
     * @param  $is_static
     * @param  $m_returnType
     * @param  $m_name
     * @param  $has_para
     * @param  $m_parameters
     */
    function insert_object_class_method($m_modifier, $is_static, $m_returnType, $m_name, $has_para, $m_parameters) {
      $tempAr = array("method_num" => $this->method_counter);
      $tempAr["method_modifier"] = $m_modifier;
      $tempAr["method_is_static"] = $is_static;
      $tempAr["method_return_type"] = $m_returnType;
      $tempAr["method_name"] = $m_name;
      $tempAr["method_has_parameters"] = $has_para;
      $tempAr["method_parameters"] = $m_parameters;
      $this->method_counter++;  //incrementing the method counter variable
      $this->object_class_methods[] = $tempAr;
    }
     
    /**
     * This function is used to insert the object class constructor into the object_class_constructor array.
     * 
     * @param $c_access_modifier
     * @param $c_name
     * @param $has_para
     * @param $c_parameters
     */
    function insert_object_class_constructor($c_access_modifier, $c_name, $has_para, $c_parameters) {
      $tempAr = array("constructor_num" => $this->constructor_counter);
      $tempAr["constructor_modifier"] = $c_access_modifier;
      $tempAr["constructor_name"] = $c_name;
      $tempAr["constructor_has_parameters"] = $has_para;
      $tempAr["constructor_parameters"] = $c_parameters;
      $this->constructor_counter++;  //incrementing the constructor counter variable
      $this->object_class_constructors[] = $tempAr;
    }

    /**
     * This function returns this instance of an object as an array. 
     * 
     * @return javafile object array 
     */
    function return_as_array() {
      $tempV = array("Javafile" => "1");
      $tempV['object_name'] = $this->object_name;
      
      $tempV['object_fields'] = $this->object_class_fields;
      
      $tempV['object_methods'] = $this->object_class_methods;
      
      $tempV['object_constructors'] = $this->object_class_constructors;
      
      return $tempV;
    }


}