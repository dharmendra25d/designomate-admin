<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addons extends CI_Controller {

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
		$d['v'] = 'addons';
		$this->load->view('template', $d);
		
	}
	public function add()
	{
		$this->load->model('Addons_M');
	 $status=$this->Addons_M->add_addons($this->input->post());
		redirect('addons/');
	 //$d['v'] = 'addons';
		//$this->load->view('template', $d);
	}
	
	public function addons_list()
	{
	 $this->load->model('Addons_M');
	 $addons=$this->Addons_M->addons_list();
	//redirect('plan-list');
	 $d['list'] = $addons;
	 $d['v'] = 'addons-list';
	$this->load->view('template', $d);
	}
	
	
	public function edit()
	{
	 $this->load->model('Addons_M');
	 $id=$this->input->get('id');
	 $addons =$this->Addons_M->single_addon($id);
	 $d['details'] = $addons;
	 $d['v'] = 'edit-addon';
	$this->load->view('template', $d);
	} 
	public function update()
	{
	 $this->load->model('Addons_M');
	 $status=$this->Addons_M->addonUpdate($this->input->post());
	redirect('addons/addons_list');
	}
	public function del()
	{
	 $this->load->model('Addons_M');
	 $id=$this->input->get('id');
	 $status=$this->Addons_M->addonDel($id);
	
	redirect('addons/addons_list');
	}
	
}
