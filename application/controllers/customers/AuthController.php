<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('customers/auth');
	}
	public function register()
	{
		$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|min_length[1]');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[5]|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required|min_length[10]');


		if ($this->form_validation->run() == true) {
			$email = $this->input->post('email');
			$password = $this->input->post('confirm_password');
			$name = $this->input->post('full_name');
			$phone_number = $this->input->post('phone_number');

			$this->auth->register($email, $password, $name, $phone_number);
			
			$this->session->set_flashdata('success','Registration Is Successful, Please Login!');
			
			redirect('customers/register');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('customers/register');
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		if ($this->form_validation->run() == true) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->auth->login($email, $password)) {
				redirect('customers/home');
			} else {
				$this->session->set_flashdata('error', 'Username and Password do not match!');
				redirect('customers/login');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('customers/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('customers_id');
		$this->session->unset_userdata('customers_email');
		$this->session->unset_userdata('customers_name');

		redirect('');
	}
}
