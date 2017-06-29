<?php
Class Themes_M extends CI_Model {
	private $table='themes';
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	

	public function add_themes($info) {

	/* $this->db->select('address_id');
	$query = $this->db->get_where($this->table, array("invoice_id"=>$info['id']));
	$aid = ($query->row()->address_id); */
	if(!empty($info['theme_name'])) {
	 $add_data['theme_name']= $info['theme_name'];
	}
	if(!empty($info['theme_desc'])) {
	 $add_data['theme_desc'] =$info['theme_desc'];
	}
	if(!empty($info['theme_price'])) {
	 $add_data['theme_price']=$info['theme_price'];
	}
	
	if(!empty($info['theme_link'])) {
	 $add_data['theme_link'] = $info['theme_link'];
	}
	
	if(!empty($info['theme_screenshot_link'])) {
	 $add_data['theme_screenshot_link'] = $info['theme_screenshot_link'];
	}
	
	
	$this->db->insert($this->table,$add_data);
		
	return true;

	}
	
	public function themes_list() {

	$this->db->select('*');
	$query = $this->db->get($this->table);
	$themes = ($query->result());
	
	return $themes;

	}
	
	public function single_theme($id) {

	$this->db->select('*');
	$this->db->where('id',$id);
	$query = $this->db->get($this->table);
	$themes = ($query->row());
	
	return $themes;

	}
	
	
	
	public function themeUpdate($id,$info) {
	   
		
		if(!empty($info['theme_name'])) {
		 $add_data['theme_name']= $info['theme_name'];
		}
		if(!empty($info['theme_desc'])) {
		 $add_data['theme_desc'] =$info['theme_desc'];
		}
		if(!empty($info['theme_price'])) {
		 $add_data['theme_price']=$info['theme_price'];
		}
		
		if(!empty($info['theme_link'])) {
		 $add_data['theme_link']=$info['theme_link'];
		}
		
		if(!empty($info['theme_screenshot_link'])) {
		 $add_data['theme_screenshot_link']=$info['theme_screenshot_link'];
		}
		
		
	    $this->db->where('id',$info['theme_id']);
		
		if($this->db->update($this->table,$add_data)) {
		return true;
		}
		
	}
	
	
   public function themeDel($id) {
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
		
	
	