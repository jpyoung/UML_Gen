<?php
require_once APPPATH . 'models/th.php';

class Rq {
	
	private $CI;
	//var $file_name;
	//var $file_text_array = array();
	var $name;
	
	function __construct() {
		$this->CI =& get_instance();
	}
		
	function mim_Rq($b) {
		$this->name = $b;
		// $this->load->model("th");
		// //$this->load->model("th");
		// $this->th->mim_Th("Andrew");
		// $v = $this->th->get_first();
		$g = new Th("Andrew");
		$this->name .= " " . $g->get_first();
	}
	
	function get_name() {
		return $this->name;
	}
	
}

?>