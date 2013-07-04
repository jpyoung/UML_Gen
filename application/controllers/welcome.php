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
	
		//gathering the user preferences
		$temp_pref = $this->retrieve_user_preferences();
		
		//Setting the colors that were retrieved
		$data['background_color'] = $temp_pref['background_color'];
		$data['panel_background_color'] = $temp_pref['panel_background_color'];
		$data['container_header_color'] = $temp_pref['container_header_color'];
		
	
		$this->load->view('welcome_message', $data);
	
	}
	
	//this function is used to retrieve the user preferences that are
	//stored in the user_site_pref table.
	function retrieve_user_preferences() {
		
		$query_string = 'select * from user_site_pref where user_id =' . $this->session->userdata('user_id');

		$query = $this->db->query($query_string);
		
		$pref_array = array(
			"background_color" => 'white',
			"panel_background_color" => 'white',
			"container_header_color" => '#0567ad'
		);
		
		if ($query->num_rows() > 0) {
			//found a row in the user_site_pref table for the given user
			$ro = $query->row_array();
			$pref_array['background_color'] = $ro['background_color'];
			$pref_array['panel_background_color'] = $ro['panel_background_color'];
			$pref_array['container_header_color'] = $ro['container_header_color'];
			return $pref_array;
		} else {
			//echo "<h1>Invalid</h1>";
			return $pref_array;
		}

		return $containerHeaderColor;
	}
		
	//function is called when an admin would like to add a new user to the db.
	function create_new_user() {
		
		$this->load->view('create_user_view');
	}
	
	
	function get_all_users() {
		return $this->db->query('select * from user')->result();
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