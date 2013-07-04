<?php
//this is the controller class for file uploads none ajax method. 
class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		// $this->insert_file_into_db($this->upload->data());
		
		$config['upload_path'] = './uploaded_files/';

		$config['allowed_types'] = '*';

		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			//there was an error
			$this->load->view('upload_result_view', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->insert_file_into_db($this->upload->data());
			
			$this->load->view('upload_result_view', $data);
		}
	}
	
	function insert_file_into_db($data) {
		//echo "Jack Young";
		
		$info = array(
			 'f_id'=> null,
			 'u_id' => $this->session->userdata('user_id'),
			 'f_name' => $data['file_name'],
			 'f_path' => $data['file_path'],
			'f_upload_date' => date("Y-m-d H:i:s"),
			 'f_last_modified'=> null
			);
		
		$this->db->insert('file', $info);
		print_r($info);
		
	}
	
	
	

	
	
}





?>












