<?php
/////////////////////////////////////////////////////////////////////////////
//
// Reader.php
//
// Jack Young <jpyoung17@gmail.com
//
// The Reader class is used to read in a file. 
//
/////////////////////////////////////////////////////////////////////////////
class File_grabber {

	private $CI;
	var $file_name;
	var $file_text_array = array();

	function __construct() {
		$this->CI =& get_instance();
	}


	function mim_File_grabber($file_name) {
		$this->file_name = $file_name;
		$this->read_in_file();
	}

	function get_file_name(){
		return $this->file_name;
	}

	function get_file_text_array() {
		return $this->file_text_array;
	}

	function read_in_file() {
		$fh = fopen($this->get_file_name(), "r");
		while(! feof($fh)) {
			$this->file_text_array[] = trim(fgets($fh));
		}
		fclose($fh);
	}


}

?>