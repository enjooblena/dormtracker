<?php
class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
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
