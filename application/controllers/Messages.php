<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller {

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
		$d['v'] = 'send-message';
		 $this->load->model('Users_M');
		 $users=$this->Users_M->users_list();
		//redirect('plan-list');
		 $d['userlist'] = $users;
		$this->load->view('template', $d);
		
	}
	public function history()
	{
		$d['v'] = 'message-history';
		 $this->load->model('Messages_M');
		 $messages=$this->Messages_M->messages();
		//redirect('plan-list');
		 $d['messages'] = $messages;
		 if($this->input->get('msg')) {
		  $single_message=$this->Messages_M->single_message($this->input->get('msg'));
		  $d['single_message'] = $single_message;
		 } 
		$this->load->view('template', $d);
		
	}
	
	public function send()
	{
	 $this->load->model('Users_M');		
	 $users=$this->Users_M->user_notification($this->input->post());
	 $this->session->set_flashdata('success', 'Message Sent successfully!');
	 redirect('messages');
	}
	public function read_msg()
	{
	 $this->load->model('Users_M');		
	 $users=$this->Users_M->notification_read($this->input->post());
	 $this->session->set_flashdata('success', 'Message Sent successfully!');
	 redirect('messages');
	}
	
	
}
