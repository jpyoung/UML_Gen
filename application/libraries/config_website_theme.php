<?php

class Config_website_theme {

    var $CI;

    function __construct() {
        $this->CI = & get_instance();
    }

    function get_settings() {
	
			//To set the title of the website 
		$data['website_title'] = "Buy an A Site";
	  	
		
		
		return $data;
	

    }

}

?>