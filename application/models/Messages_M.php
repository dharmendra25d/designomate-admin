<?php
Class Messages_M extends CI_Model {
	private $table='users_notifications';
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	

	public function messages() {

	$this->db->select('*');
	$this->db->order_by('date','desc');
	$query = $this->db->get($this->table);
	$messages = ($query->result());
	
	return $messages;

	}
	
	public function single_message($id) {

	$this->db->select('*');
	$this->db->where('id',$id);
	$query = $this->db->get($this->table);
	$message = ($query->row());
	
	return $message;

	}
	
	
	
	
	
	
	
	
}
		
	
	