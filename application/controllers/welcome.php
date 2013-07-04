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
	
		// echo "<h3>User Id". $this->session->userdata('user_id') . "</h3>";
		// echo "<h3>Username". $this->session->userdata('username') . "</h3>";
		
	
		$data['user_info'] = $this->get_all_users();
	
		//$data['user_info'] = $this->db->get('user');
	
		//print_r($data['user_info']);
	
		$this->load->view('welcome_message', $data);
	
		 //$this->load->view('UI_Features/userForm_view');
	}
		
	//function is called when an admin would like to add a new user to the db.
	function create_new_user() {
		
		$this->load->view('create_user_view');
	}
	
	
	function get_all_users() {
		return $this->db->query('select * from user');
	}
	
	
	function goto_user_management_page() {
		
		$data['user_info'] = $this->get_all_users();
		$this->load->view('user_management_view', $data);
	}

	//function is used to insert a new user
	function insert_new_user() {
		$info = array(
			"u_id" => null,
			"u_username" => $_POST['username'],
			"u_password" => $_POST['password'],
			"u_name" => $_POST['name'],
			"u_address" => $_POST['street'],
			"u_city" => $_POST['city'],
			"u_state" => $_POST['state'],
			"u_zip" => $_POST['zip'],
			"u_email" => $_POST['email'],
			"user_type" => 1
		);

		$this->db->insert("user", $info);
		$this->goto_user_management_page();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */