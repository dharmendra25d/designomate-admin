<?php
Class Addons_M extends CI_Model {
	private $table='addons';
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	

	public function add_addons($info) {

	/* $this->db->select('address_id');
	$query = $this->db->get_where($this->table, array("invoice_id"=>$info['id']));
	$aid = ($query->row()->address_id); */
	if(!empty($info['addon_name'])) {
	 $add_data['addon_name']= $info['addon_name'];
	}
	if(!empty($info['addon_desc'])) {
	 $add_data['addon_desc'] =$info['addon_desc'];
	}
	if(!empty($info['addon_price'])) {
	 $add_data['addon_price']=$info['addon_price'];
	}
	
	if(!empty($info['addon_link'])) {
	 $add_data['addon_link'] = $info['addon_link'];
	}
	
	
	
	$this->db->insert($this->table,$add_data);
		
	return true;

	}
	
	public function addons_list() {

	$this->db->select('*');
	$query = $this->db->get($this->table);
	$themes = ($query->result());
	
	return $themes;

	}
	
	public function single_addon($id) {

	$this->db->select('*');
	$this->db->where('id',$id);
	$query = $this->db->get($this->table);
	$themes = ($query->row());
	
	return $themes;

	}
	
	
	
	public function addonUpdate($info) {
	   
		
		if(!empty($info['addon_name'])) {
		 $add_data['addon_name']= $info['addon_name'];
		}
		if(!empty($info['addon_desc'])) {
		 $add_data['addon_desc'] =$info['addon_desc'];
		}
		if(!empty($info['addon_price'])) {
		 $add_data['addon_price']=$info['addon_price'];
		}
		
		if(!empty($info['addon_link'])) {
		 $add_data['addon_link']=$info['addon_link'];
		}
		
	
		
	    $this->db->where('id',$info['addon_id']);
		
		if($this->db->update($this->table,$add_data)) {
		return true;
		}
		
	}
	
	
   public function addonDel($id) {
	   error_reporting(0);
		$this->db->select('id');
		$query = $this->db->get_where($this->table, array("id"=>$id));
		$aid = $query->row()->id;
		if(!empty($aid)) {
		$this->db->where('id', $id);
		if($this->db->delete($this->table)) {
			return true;
		} 
		} else {
			return false;
		}
		
	}
	
	
	
	
}
		
	
	