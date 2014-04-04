<?php
class Announcement_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_all_announcements()
	{
		
		$query = $this->db->get('announcements');
		return $query->result_array();

	}
	
	
	public function edit_announcement()
	{
		$this->load->helper('url');

		$data = array(
			'name' => $this->input->post('title'),
			'details' => $this->input->post('details'),
			'vdate' => $this->input->post('vdate'),
			'violator' => $this->input->post('author'),
			'orig_author' => $this->input->post('orig_author')
		);

		mysql_query("UPDATE announcements SET name='". $data['title'] . "' WHERE author= '". $data['orig_author'] . "'") or die(mysql_error());
		mysql_query("UPDATE announcements SET details='". $data['details'] . "' WHERE author= '". $data['orig_author'] . "'") or die(mysql_error());
		mysql_query("UPDATE announcements SET vdate='". $data['vdate'] . "' WHERE author= '". $data['orig_author'] . "'") or die(mysql_error());
		mysql_query("UPDATE announcements SET author='". $data['author'] . "' WHERE author= '". $data['orig_author'] . "'") or die(mysql_error());
		//return $this->db->update('dormer', $data);
		
	
	}
	
	public function set_announcement()
	{
		$this->load->helper('url');

		$data = array(
			
			'title' => $this->input->post('title'),
			'details' => $this->input->post('details'),
			'vdate' => $this->input->post('vdate'),
			'author' => $this->input->post('author')
		
		);

		return $this->db->insert('announcements', $data);
	}	
}
