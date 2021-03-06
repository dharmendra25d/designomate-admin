<?php
Class Orders_M extends CI_Model {
	private $table='cg_orders';
	 public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
		 $this->load->helper('string');
    }
	

	public function add_plan($info) {

	/* $this->db->select('address_id');
	$query = $this->db->get_where($this->table, array("invoice_id"=>$info['id']));
	$aid = ($query->row()->address_id); */
	if(!empty($info['plan_name'])) {
	 $add_data['plan_name']= $info['plan_name'];
	}
	if(!empty($info['plan_desc'])) {
	 $add_data['plan_desc'] =$info['plan_desc'];
	}
	if(!empty($info['plan_price'])) {
	 $add_data['plan_price']=$info['plan_price'];
	}
	
	if(!empty($info['plan_type'])) {
	 $add_data['plan_type'] = $info['plan_type'];
	}
	
	$this->db->insert($this->table,$add_data);
		
	return true;

	}
	
	public function orders_list() {

	$this->db->select('*');
	$query = $this->db->get($this->table);
	$orders = ($query->result());
	
	return $orders;

	}
	
	public function single_order($id) {

	$this->db->select('*');
	$this->db->where('id',$id);
	$query = $this->db->get($this->table);
	$order = ($query->row());
	
	return $order;

	}
	public function custom_order() {

	$this->db->select('*');
	$query = $this->db->get('custom_design_queries');
	$orders = ($query->result());
	return $orders;

	}
	
	public function custom_order_details($id) {

	$this->db->select('*');
	$this->db->where('id',$id);
	$query = $this->db->get('custom_design_queries');
	$order = ($query->row());
	
	return $order;

	}
	
	
	public function planUpdate($id,$info) {
	   
		
		if(!empty($info['plan_name'])) {
		 $add_data['plan_name']= $info['plan_name'];
		}
		if(!empty($info['plan_desc'])) {
		 $add_data['plan_desc'] =$info['plan_desc'];
		}
	
		 $add_data['plan_price']=$info['plan_price'];
		
		
		if(!empty($info['plan_type'])) {
		 $add_data['plan_type'] = $info['plan_type'];
	}
	
	    $this->db->where('id',$info['plan_id']);
		
		if($this->db->update($this->table,$add_data)) {
		return true;
		}
		
	}
	
	
   public function planDel($id) {
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
		
	
	