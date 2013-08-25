<?php
/////////////////////////////////////////////////////////////////////////////
//
// UML_Algo.php
//
// Jack Young <jpyoung17@gmail.com
//
// The UML_Algo class is the wrapper controller class for the entire UML algorithm
//
/////////////////////////////////////////////////////////////////////////////
require_once APPPATH . 'models/algo_a/reader.php';
require_once APPPATH . 'models/algo_a/parser.php';
require_once APPPATH . 'models/algo_a/Mapper.php';
require_once APPPATH . 'models/algo_a/lazy_scripting.php';

class Uml_algo {
  
private $CI;
  var $passed_in_file_name;
	//var $reader_object;
  
  function __construct() {
    	$this->CI =& get_instance();
  }

	function mim_Uml_algo($passedInFileName) {
		$this->passed_in_file_name = $passedInFileName;
	}
  
  function get_passed_in_file_name() {
    return $this->passed_in_file_name;
  }

	// function get_reader_object() {
	// 	$this->reader_object = new Reader($this->get_passed_in_file_name());
	// }
  
  
  //controller method for generating the uml table. returns the produced table from the mapper class
  function generate_uml() {
    
    
    //creating instance of the reader class, passing in the file name path.  example "Java_Test_Files/outer.java
     $reader = new Reader($this->get_passed_in_file_name());
    //$reader = $this->get_reader_object();

    //set var equal to the text file array
    $start_file_array = $reader->get_file_text_array();
    
    //creating instance of the parser class, passing in the read in file array
    $parser = new Parser($start_file_array);

    //launching the parser controller method
    $parser->parse_controller();
    
    //start of mapper section
    $mapper = new Mapper($parser->get_parsed_file());
    
    //launching the mapper controller method, the mapper controller method returns the produced uml table
    //this return statement is used to return the produced table.  Where the table can then be displayed play
    //simple echo statement. 
    return $mapper->mapper_controller();
    
  }
  
}

?>