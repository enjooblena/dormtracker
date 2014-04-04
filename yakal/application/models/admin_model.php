<?php
class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_all_admin()
	{
		
		$query = $this->db->get('admin');
		return $query->result_array();

	}	
	public function set_account()
	{
		$this->load->helper('url');

		$data = array(
			
			'username' => $this->input->post('username'),			
			'password' => MD5($this->input->post('password')),
			'type' => 1
		);

		return $this->db->insert('account', $data);
	}	

	public function edit_account()
	{
		$this->load->helper('url');

		$data = array(			
			'username' => $this->input->post('username'),			
			'password' => MD5( $this->input->post('password')),
			'type' => 1
		);
		
		mysql_query("UPDATE account SET password='".$data['password']. "' WHERE username= '". $data['username'] . "'") or die(mysql_error());
		
	}

	public function edit_admin()
	{
		$this->load->helper('url');

		$data = array(			
			
			'first_name' => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name' => $this->input->post('last_name'),
			'position' => $this->input->post('room'),
			'contact_number' => $this->input->post('student_number'),
			'orig_admin_id' => $this->input->post('orig_admin_id')		
		);

		mysql_query("UPDATE admin SET first_name='". $data['first_name'] . "' WHERE admin_id= '". $data['orig_admin_id'] . "'") or die(mysql_error());
		mysql_query("UPDATE admin SET middle_name='". $data['middle_name'] . "' WHERE admin_id= '". $data['orig_admin_id'] . "'") or die(mysql_error());
		mysql_query("UPDATE admin SET last_name='". $data['last_name'] . "' WHERE admin_id= '". $data['orig_admin_id'] . "'") or die(mysql_error());
		mysql_query("UPDATE admin SET position='". $data['position'] . "' WHERE admin_id= '". $data['orig_admin_id'] . "'") or die(mysql_error());
		mysql_query("UPDATE admin SET contact_number='". $data['contact_number'] . "' WHERE admin_id= '". $data['orig_admin_id'] . "'") or die(mysql_error());		
	
	}
	
	public function set_admin()
	{
		$this->load->helper('url');

		$data = array(
			
			'username' => $this->input->post('username'),
			
			'first_name' => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name' => $this->input->post('last_name'),
			'position' => $this->input->post('position'),
			'contact_number' => $this->input->post('contact_number'),
			'admin_id' => $this->input->post('admin_id')
		);

		return $this->db->insert('admin', $data);
	}	
}
