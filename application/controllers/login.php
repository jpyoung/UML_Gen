<?php
class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	function index($warn=NULL, $message=NULL) {
		$this->login_view($warn, $message);		
	}
	
	function login_view($warn=NULL, $message=NULL) {
		$this->load->library('config_website_theme');
		$data = $this->config_website_theme->get_settings();
		$data['warn'] = $warn;
		$data['message'] = $message;
		$this->load->view('login_view', $data);
	}
	
	function login_verification() {
		$username = $_POST['l_username'];
		$password = $_POST['l_password'];
		if ($username == '' || $password == '') {
			//echo "<h1>Username and password can not be blank</h1>";
			$data = '';
		    $warn = 'Null! Invalid Username and Password';
		    $this->index($warn, $data);
		} else {
			$this->load->model('login_model');
			$user = $this->login_model->authanticate_user($username, $password);
			if ($user) {
				//echo "found a matching one";
				$us_data = array (
						'user_type' => '1',
						'user_id' => $user->u_id,
						'username' => $username,
						'password' => $password,
						'logged_in' => TRUE
				);
	
				$this->session->set_userdata($us_data);
				//$id=1;
				redirect('welcome');
			} else {
				//echo "<h1>Could not find any matching username or password.</h1>";
				$data = '';
			    $warn = 'Invalid Username and Password';
			    $this->index($warn, $data);
			}		
		}
	}
	

}
?>