
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 $data['type'] = $session_data['type'];
	 if($data['type'] == 1) {
		$this->load->view('admin_view', $data);
	 } else {
		$this->load->view('dormer_view', $data);
	 }

   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }
 function aannouncements()
 {
	$this->load->view('a-announcements-view');
 }
 function aadmins()
 {
	$this->load->view('a-admins-view');
 }
 function adormers()
 {
	$this->load->view('a-dormers-view');
 }
 function aviolations()
 {
	$this->load->view('a-violations-view');
 }
 function aevents()
 {
	$this->load->view('a-events-view');
 }
 function adddormer()
 {
	$this->load->view('add-dormer-view');
 }
 function addadmin()
 {
	$this->load->view('add-admin-view');
 }
 function editdormer()
 {
	$this->load->view('edit-dormer-view');
 }
 
 function deletedormer()
 {
	$this->load->view('del-dormer-view');
 }
 
 function addviolation()
 {
	$this->load->view('add-violation-view');
 }
 
 function createviolation()
 {
	$this->load->model('violation_model');
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'Create violation report';
	
	$this->form_validation->set_rules('name', 'Name', 'required');
	$this->form_validation->set_rules('details', 'Details', 'required');
	$this->form_validation->set_rules('vdate', 'Vdate', 'required');
	$this->form_validation->set_rules('violator', 'Violator', 'required');
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('add-violation-view', $data);
	}
	else
	{	

		$this->violation_model->set_violation();
		$this->load->view('success');
	}
 }
 
 /*function viewadmins()
 {
	$this->load->view('view_admins');
 }
 function viewdormers()
 {
	$this->load->view('view_dormers');
 }*/
 
 public function editdormer2()
 {

	$this->load->model('dormer_model');
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'Edit dormer profile';
	
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');	
	$this->form_validation->set_rules('first_name', 'First Name', 'required');
	$this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
	$this->form_validation->set_rules('last_name', 'Last Name', 'required');
	$this->form_validation->set_rules('room', 'Room Assignment', 'required');
	$this->form_validation->set_rules('student_number', 'Student Number', 'required');
	$this->form_validation->set_rules('course', 'Course', 'required');
	$this->form_validation->set_rules('college', 'College', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('phone_number', 'Phone number', 'required');
	$this->form_validation->set_rules('birthday', 'Birthdate', 'required');
	$this->form_validation->set_rules('permanent_add', 'Permanent Address', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('edit-dormer-view', $data);
	}
	else
	{	
		$this->dormer_model->edit_account();
		$this->dormer_model->edit_dormer();
		$this->load->view('success');
	} 
 
 
 
 }
 
public function createdormer()
{

	$this->load->model('dormer_model');
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'Create dormer profile';

	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');	
	$this->form_validation->set_rules('first_name', 'First Name', 'required');
	$this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
	$this->form_validation->set_rules('last_name', 'Last Name', 'required');
	$this->form_validation->set_rules('room', 'Room Assignment', 'required');
	$this->form_validation->set_rules('student_number', 'Student Number', 'required');
	$this->form_validation->set_rules('course', 'Course', 'required');
	$this->form_validation->set_rules('college', 'College', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('phone_number', 'Phone number', 'required');
	$this->form_validation->set_rules('birthday', 'Birthdate', 'required');
	$this->form_validation->set_rules('permanent_add', 'Permanent Address', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('add-dormer-view', $data);
	}
	else
	{	
		$this->dormer_model->set_account();
		$this->dormer_model->set_dormer();
		$this->load->view('success');
	}
}

public function create_admin() 
{
	$this->load->model('admin_model');
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create admin profile';
	
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');	
	$this->form_validation->set_rules('first_name', 'First Name', 'required');
	$this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
	$this->form_validation->set_rules('last_name', 'Last Name', 'required');
	$this->form_validation->set_rules('position', 'Position', 'required');
	$this->form_validation->set_rules('contact_number', 'Contact Number', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('add-admin-view', $data);
	}
	else
	{	
		$this->admin_model->set_account();
		$this->admin_model->set_admin();
		$this->load->view('success');
	}
}
 
}

?>

