<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	
	}
	
	
	public function index()
	{
		if($this->session->userdata('user_type') == 1) {
			$this->welcome_page();
		} else {
			redirect('login');
		}
	
	
	}
	
	function welcome_page() {
		$this->auth->check_session();
	
		echo "<h3>User Id". $this->session->userdata('user_id') . "</h3>";
	
		$data['user_info'] = $this->get_all_users();
	
		//$data['user_info'] = $this->db->get('user');
	
		//print_r($data['user_info']);
	
		$this->load->view('welcome_message', $data);
	
		 //$this->load->view('UI_Features/userForm_view');
	}
	
	
	
	
	function get_all_users() {
		return $this->db->query('select * from user');
	}
	
	
	function goto_user_management_page() {
		
		$data['user_info'] = $this->get_all_users();
		$this->load->view('usermanagement', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */