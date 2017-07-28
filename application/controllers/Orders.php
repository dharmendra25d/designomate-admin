<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
     $this->load->model('Orders_M');
	 $orders=$this->Orders_M->orders_list();
	//redirect('plan-list');
	 $d['list'] = $orders;
	 $d['v'] = 'orders';
	$this->load->view('template', $d);
		
	}
	
	
	
	public function orderDetails()
	{
	 $this->load->model('Orders_M');
	 $id=$this->input->get('id');
	 $order=$this->Orders_M->single_order($id);
	
	 $d['details'] = $order;
	 $d['v'] = 'order-details';
	 $this->load->view('template', $d);
	}
	
	public function queries()
	{
	 $this->load->model('Orders_M');
	 $queries=$this->Orders_M->custom_order();
	 $d['list'] = $queries;
	 $d['v'] = 'custom-orders';
	 $this->load->view('template', $d);
	}
	
	public function queriesDetails()
	{
	 $this->load->model('Orders_M');
	  $id=$this->input->get('id');
	 $queries=$this->Orders_M->custom_order_details($id);
	 $d['details'] = $queries;
	 $d['v'] = 'order-custom-query';
	 $this->load->view('template', $d);
	}
	
	public function update()
	{
	 $this->load->model('Plans_M');
	 $id=$this->input->get('id');
	 $status=$this->Plans_M->planUpdate($id,$this->input->post());
	redirect('plans/plans_list');
	}
	public function del()
	{
	 $this->load->model('Plans_M');
	 $id=$this->input->get('id');
	 $status=$this->Plans_M->planDel($id);
	
	redirect('plans/plans_list');
	}
	
}
