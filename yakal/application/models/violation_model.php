<?php
class Violation_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_all_violations()
	{
		
		$query = $this->db->get('violations');
		return $query->result_array();

	}
	
	
	public function edit_violation()
	{
		$this->load->helper('url');

		$data = array(
			'name' => $this->input->post('name'),
			'details' => $this->input->post('details'),
			'vdate' => $this->input->post('vdate'),
			'violator' => $this->input->post('violator'),
			'orig_violator' => $this->input->post('orig_violator')
		);

		mysql_query("UPDATE violations SET name='". $data['name'] . "' WHERE violator= '". $data['orig_violator'] . "'") or die(mysql_error());
		mysql_query("UPDATE violations SET details='". $data['details'] . "' WHERE violator= '". $data['orig_violator'] . "'") or die(mysql_error());
		mysql_query("UPDATE violations SET vdate='". $data['vdate'] . "' WHERE violator= '". $data['orig_violator'] . "'") or die(mysql_error());
		mysql_query("UPDATE violations SET violator='". $data['violator'] . "' WHERE violator= '". $data['orig_violator'] . "'") or die(mysql_error());
		//return $this->db->update('dormer', $data);
		
	
	}
	
	public function set_violation()
	{
		$this->load->helper('url');

		$data = array(
			
			'name' => $this->input->post('name'),
			'details' => $this->input->post('details'),
			'vdate' => $this->input->post('vdate'),
			'violator' => $this->input->post('violator')
		
		);

		return $this->db->insert('violations', $data);
	}	
}
