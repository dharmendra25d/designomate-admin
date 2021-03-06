<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
     $this->load->model('Users_M');
	 $users=$this->Users_M->users_list();
	//redirect('plan-list');
	 $d['list'] = $users;
	 $d['v'] = 'users-list';
	$this->load->view('template', $d);
		
	}
	
	
	
	public function edit()
	{
	 $this->load->model('Plans_M');
	 $id=$this->input->get('id');
	 $plans=$this->Plans_M->single_plan($id);
	 $d['details'] = $plans;
	 $d['v'] = 'edit';
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
