<?php
class Dormer_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_all_dormer()
	{
		
		$query = $this->db->get('dormer');
		return $query->result_array();

	}
	
	public function set_account()
	{
		$this->load->helper('url');

		$data = array(
			
			'username' => $this->input->post('username'),			
			'password' => MD5($this->input->post('password')),
			'type' => 0
		);

		return $this->db->insert('account', $data);
	}	
	
	public function edit_account()
	{
		$this->load->helper('url');

		$data = array(			
			'username' => $this->input->post('username'),			
			'password' => MD5( $this->input->post('password')),
			'type' => 0
		);
		
		echo "this is ". $data['username'];
		echo "pass is " . $data['password'];
		mysql_query("UPDATE account SET password='".$data['password']. "' WHERE username= '". $data['username'] . "'") or die(mysql_error());
		 
		echo " success!";
		
		 // $this->db->update('account', $data);
		
		
		
		
		
		
	}
	
	public function edit_dormer()
	{
		$this->load->helper('url');

		$data = array(
			
			
			
			'first_name' => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name' => $this->input->post('last_name'),
			'room' => $this->input->post('room'),
			'student_number' => $this->input->post('student_number'),
			'course' => $this->input->post('course'),
			'college' => $this->input->post('college'),
			'email' => $this->input->post('email'),
			'phone_number' => $this->input->post('phone_number'),
			'birthday' => $this->input->post('birthday'),
			'permanent_add' => $this->input->post('permanent_add'),
			'orig_stud' => $this->input->post('orig_stud')
		
		);

		mysql_query("UPDATE dormer SET first_name='". $data['first_name'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET middle_name='". $data['middle_name'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET last_name='". $data['last_name'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET room='". $data['room'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET course='". $data['course'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET college='". $data['college'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET email='". $data['email'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET phone_number='". $data['phone_number'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET birthday='". $data['birthday'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET permanent_add='". $data['permanent_add'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		mysql_query("UPDATE dormer SET student_number='". $data['student_number'] . "' WHERE student_number= '". $data['orig_stud'] . "'") or die(mysql_error());
		//return $this->db->update('dormer', $data);
		
	
	}
	
	public function set_dormer()
	{
		$this->load->helper('url');

		$data = array(
			
			'username' => $this->input->post('username'),
			
			'first_name' => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name' => $this->input->post('last_name'),
			'room' => $this->input->post('room'),
			'student_number' => $this->input->post('student_number'),
			'course' => $this->input->post('course'),
			'college' => $this->input->post('college'),
			'email' => $this->input->post('email'),
			'phone_number' => $this->input->post('phone_number'),
			'birthday' => $this->input->post('birthday'),
			'permanent_add' => $this->input->post('permanent_add')
		
		);

		return $this->db->insert('dormer', $data);
	}	
}
