<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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


	function __construct() {
		parent::__construct();
		$this->load->helper('url');

	}


	public function index() {
		if($this->session->userdata('user_type') == 1) {
			$this->dashboard_page();
		} else {
			redirect('login');
		}
	}


	function dashboard_page() {

		$this->auth->check_session();

		//gathering the user preferences
		$temp_pref = $this->retrieve_user_preferences();

		//Setting the colors that were retrieved
		$data['background_color'] = $temp_pref['background_color'];
		$data['panel_background_color'] = $temp_pref['panel_background_color'];
		$data['container_header_color'] = $temp_pref['container_header_color'];

		//getting all the users information
		$data['user_info'] = $this->get_all_users();

		//getting all the file information 
		$data['files_info'] = $this->get_all_files();
		
		$data['title'] = "Dashboard";

		// $this->load->view('welcome_message', $data);
		$this->load->view('dashboard_view', $data);
	}


	//this function is used to retrieve the user preferences that are
	//stored in the user_site_pref table.
	function retrieve_user_preferences() {

		$query_string = 'select * from user_site_pref where user_id =' . $this->session->userdata('user_id');

		$query = $this->db->query($query_string);

		//below are the default pre array colors for the site
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


	//This function is used to update the users preferences.
	//It is called from the user_preferences_view php page.  
	function update_user_preferences() {
		$data = array(
			"user_id" => $this->session->userdata('user_id'),
			"background_color" => $_POST['backgroundColor'],
			"panel_background_color" => $_POST['panelColor'],
			"container_header_color" => $_POST['headerColor']
		);
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->update("user_site_pref", $data);
		$this->goto_user_management_page();
	}


	//function is called when an admin would like to add a new user to the db.
	function create_new_user() {

		$this->load->view('create_user_view');
	}

	//used to query the db and return all the users. 
	function get_all_users() {
		return $this->db->query('select * from user')->result();
	}

	//used to query the db and return all the file table.
	function get_all_files() {
		return $this->db->query('select * from file')->result();
	}


	//this is used to go to the user management view page.
	//User Management Tab 
	function goto_user_management_page() {
		$data['title'] = "User Management";
		$data['user_info'] = $this->get_all_users();
		
		$data['bread_crumb'] = array(array("User Management", "goto_user_management_page"));
		
		$this->load->view('user_management_view', $data);
	}


	//used to go to the user preferences view page.
	function goto_user_preferences() {
		$data['title'] = "User Preferences";
		$data['user_info'] = $this->get_all_users();
		
		$data['bread_crumb'] = array(array("User Preferences", "goto_user_preferences"));
		
		$this->load->view('user_preferences_view', $data);
	}

	//used to go ot the detailed_user_view page called from the user_management_view.php page.
	//accepts the user_id of the selected user
	function goto_detailed_user_view($id) {

		//grabbing the individual users information
		$data['user_info'] = $this->get_user_by_id($id);

		//grabbing the all the files associated with this user id
		$data['user_files'] = $this->get_files_by_user($id);
		
		$this->load->model('stats_tracker_model');
		$data['account_activity'] = $this->stats_tracker_model->get_stats_tracker_by_userid($id);
		
		$data['bread_crumb'] = array(array("User Management", "goto_user_management_page"));
		
		$data['title'] = "Detail User View";

		$this->load->view('detailed_user_view', $data);
	}
	
	//takes the user to the uploader view
	function goto_uploader_view() {
		
		//getting all the file information 
		$data['files_info'] = $this->get_all_files();
		
			$data['title'] = "Uploader";
			$data['user_info'] = $this->get_all_users();
			$this->load->view('uploader_view', $data);
	}

	//used to go to the user_profile view
	function goto_user_profile_view() {

		//gathering the user information from the DB. 
		$data['user_info'] = $this->get_user_by_id($this->session->userdata('user_id'));
		
		$data['title'] = "User Profile";

		$this->load->view('user_profile_view', $data);
	}

	//used to go the the uml diagrams page
	function goto_uml_diagrams() {
		$this->auth->check_session();

		//gathering the user preferences
		$temp_pref = $this->retrieve_user_preferences();

		//Setting the colors that were retrieved
		$data['background_color'] = $temp_pref['background_color'];
		$data['panel_background_color'] = $temp_pref['panel_background_color'];
		$data['container_header_color'] = $temp_pref['container_header_color'];

		//getting all the users information
		$data['user_info'] = $this->get_all_users();

		//getting all the file information 
		$data['files_info'] = $this->get_all_files();
		
		$data['bread_crumb'] = array(array("UML Diagrams", "goto_uml_diagrams"));
		
		$data['title'] = "UML Diagrams";
		
		$this->load->view('diagrams_view', $data);
		//$this->load->view('uml_diagram_view', $data);
	}


	//The user clicked the generate uml button in the actions column
	function goto_detailed_diagrams($select_file_id) {

		if ($select_file_id != null) {
			$data['select_file_id'] = $select_file_id;
		} else {
			//generate_uml_button
			$data['select_file_id'] = "Nothing";
		}
		
		//gather the selected java file contents and generating the UML diagram. 
		$data['file'] = $this->get_file_by_id($select_file_id);
		$this->load->model("algo_a/file_grabber");
		$this->file_grabber->mim_File_grabber($data['file']->f_path);
		$data['file_read_in'] = $this->file_grabber->get_file_text_array();
		$this->load->model("algo_a/uml_algo");
		$this->uml_algo->mim_Uml_algo($data['file']->f_path);
	    $data['produced_uml_table'] = $this->uml_algo->generate_uml();

		$data['bread_crumb'] = array(array("UML Diagrams", "goto_uml_diagrams"));
	    
		$data['title'] = "Generate Diagram";
				// $this->load->view('detailed_diagrams_view', $data);
		$this->load->view('gen_diagrams_view', $data);
	}
	
	
	

	//when the user selects a given file name link on the UML diagrams page
	function goto_detailed_file_view($selected_file_id) {
		if ($selected_file_id != null) {
			$data['selected_file_id'] = $selected_file_id;
		} else {
			//generate_uml_button
			$data['selected_file_id'] = "Nothing";
		}
		
		$data['file'] = $this->get_file_by_id($selected_file_id);
		
		
		// $this->load->model("Algo/reader");
		// 	$this->reader->mim_Reader($data['file']->f_path);
		// 	$data['file_read_in'] = $this->reader->get_file_text_array();
		// 	
		// $this->load->model("algo_a/uml_algo");
		// $this->uml_algo->mim_Uml_algo($data['file']->f_path);
		
		
		$this->load->model("algo_a/file_grabber");
		$this->file_grabber->mim_File_grabber($data['file']->f_path);
		$data['file_read_in'] = $this->file_grabber->get_file_text_array();
		// $this->load->model("algo_a/uml_algo");
		// $this->uml_algo->mim_Uml_algo($data['file']->f_path);
		// 	    $produced_uml_table = $this->uml_algo->generate_uml();
		// 	    echo $produced_uml_table;
		
		//echo $this->config->item('uploaded_url');
		
		$data['bread_crumb'] = array(array("UML Diagrams", "goto_uml_diagrams"));
		
		$data['title'] = "Detailed File View";
				
		$this->load->view('detailed_file_view', $data);			
	}

	//function is used to get user by the passed in id
	//and return the resulting query
	function get_user_by_id($id) {
		$this->db->where('u_id = ',$id);
        $res = $this->db->get('user');
       	
		if($res->num_rows){
			return $res->row();
		} 
		return false;
	}


	//function is used to get all the files uploaded
	//by the passed in user id. Returns the resulting query. 
	function get_files_by_user($user_id) {
		$this->db->where('u_id = ',$user_id);
        $res = $this->db->get('file');
       	
		if($res->num_rows){
			return $res->result();
		} 
		return false;
	}
	
	//function is used to get an individual file by the passed in file_id
	function get_file_by_id($file_id) {
		$this->db->where('f_id = ', $file_id);
        $res = $this->db->get('file');
       	
		if($res->num_rows){
			return $res->row();
		} 
		return false;
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

	//used to change users password on the user profile view page
	function change_password() {

		//using the current users id to query update
		$where_at = $this->session->userdata('user_id');

		$currentPass = $_POST['currentPass'];
		$newPass = $_POST['newPass'];
		$confirmPass = $_POST['confirmPass'];

		//echo "currentPass= " . $currentPass . " new pass= " . $newPass . " confirmPass= " . $confirmPass;
		if ($this->session->userdata('password') == $currentPass) {
			//The password they logged in with matches the password they entered into to update their password
			if($newPass == $confirmPass) {
				//newPassword and confirm passwords do in fact match
				$this->load->model('profile_model');
				$did_password_change_work = $this->profile_model->profile_change_password($newPass, $where_at);
				echo $did_password_change_work;
			} else {
				//the new and confirm passwords do not match
				echo 'Invalid, the new and confirm passwords do not match';
			}	
		} else {
			//The current password they entered does not match
			echo 'Error, the current password.';
		}	
	}


	//used to save the profile user information on the user profile view page
	function save_profile_user_info() {

		$user_id = $this->session->userdata('user_id');
		$user_info_submitted = array(
			'u_name' => $_POST['name'], 
			'u_email'=> $_POST['email'], 
			'u_address' => $_POST['address'], 
			'u_city' => $_POST['city'], 
			'u_state' => $_POST['state'],
			'u_zip' => $_POST['zip']
		);

		//using the user management model to update the table
		$this->load->model('user_management_model');
		$rke = $this->user_management_model->edit_user_info($user_info_submitted, $user_id);
		echo "true";
	}

	function edit_user_info($profile_data, $whereAt)
	{
		 $this->db->where('user_id',$whereAt);
	     $this->db->update('users', $profile_data);	
	}



}
