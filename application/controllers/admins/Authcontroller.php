<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admins/auth');
	}
 
	public function login()
	{ 
		$this->form_validation->set_rules('email','Email Address','trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]'); 
		if ($this->form_validation->run()==true)
	   	{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
 
			if($this->auth->login($email,$password))
			{
				redirect('admins/login');
			}
			else
			{
				$this->session->set_flashdata('error','Email  and Password do not match!');
				redirect('Admins/login');
			}
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('email');

		redirect('home');
	}
}
