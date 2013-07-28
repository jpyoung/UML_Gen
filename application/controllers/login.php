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
		$data['title'] = "Login";
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
				redirect('dashboard');
			} else {
				//echo "<h1>Could not find any matching username or password.</h1>";
				$data = '';
			    $warn = 'Invalid Username and Password';
			    $this->index($warn, $data);
			}		
		}
	}
	
	function forgot_password() {
		$data['title'] = "Forgot Password";
		$data['forgot_error_message'] = "";
		$data['is_error'] = false;
		$data['return_result'] = null;
		$this->load->view('forgot_password_view', $data);
	}
	
	function lookup_password() {
		$entered_text = $_POST['forgot_entertext'];
		
		$data['return_result'] = null;
		
		if ($entered_text != null)
		{
			$data['return_result'] = $this->email_exists($entered_text);
			if ($data['return_result']) {
				$data['forgot_error_message'] = "";
				$data['is_error'] = false;
			} else {
			//echo "Did not find matching results.";
				$data['forgot_error_message'] = "<strong>Error:</strong> did not find matching record.";
				$data['is_error'] = true;
			}
		}
		else
		{
			$data['forgot_error_message'] = "<strong>Error:</strong> field cannot be empty.";
			$data['is_error'] = true;
		}
		
		
		$data['title'] = "Forgot Password";
		$this->load->view('forgot_password_view', $data);
		
		
	}
	
	function email_exists($submitted_email)
   {
          
           $query = $this->db->query("select * from user where u_username = '" . $submitted_email . "' or u_email = '" . $submitted_email . "'");
           if ($query->num_rows) {
                   return $query->row();
           }
           return false;
   }
	
	

}
?>