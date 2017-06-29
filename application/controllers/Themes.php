<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes extends CI_Controller {

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
		$d['v'] = 'themes';
		$this->load->view('template', $d);
		
	}
	public function add()
	{
		$this->load->model('Themes_M');
	 $status=$this->Themes_M->add_themes($this->input->post());
		redirect('themes');
	 //$d['v'] = 'plans';
		//$this->load->view('template', $d);
	}
	
	public function themes_list()
	{
	 $this->load->model('Themes_M');
	 $plans=$this->Themes_M->themes_list();
	//redirect('plan-list');
	 $d['list'] = $plans;
	 $d['v'] = 'themes-list';
	$this->load->view('template', $d);
	}
	
	
	public function edit()
	{
	 $this->load->model('Themes_M');
	 $id=$this->input->get('id');
	 $themes =$this->Themes_M->single_theme($id);
	 $d['details'] = $themes;
	 $d['v'] = 'edit-theme';
	$this->load->view('template', $d);
	} 
	public function update()
	{
	 $this->load->model('Themes_M');
	 $id=$this->input->get('id');
	 $status=$this->Themes_M->themeUpdate($id,$this->input->post());
	redirect('themes/themes_list');
	}
	public function del()
	{
	 $this->load->model('Themes_M');
	 $id=$this->input->get('id');
	 $status=$this->Themes_M->themeDel($id);
	
	redirect('themes/themes_list');
	}
	
}
