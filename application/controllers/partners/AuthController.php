<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('partners/auth');
	}
	public function register()
	{
		$this->form_validation->set_rules('refill_depot_name', 'Depot Name', 'trim|required|min_length[1]');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[5]|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required|min_length[10]');


		if ($this->form_validation->run() == true) {
			$depot_name = $this->input->post('refill_depot_name');
			$email = $this->input->post('email');
			$password = $this->input->post('confirm_password');
			$phone_number = $this->input->post('phone_number');

			$this->auth->register($depot_name, $email, $password, $phone_number);

			$this->session->set_flashdata('success', 'Registration Is Successful, Please Login!');

			redirect('partners/login');
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('partners/register');
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
				$status = $this->session->flashdata('status');
				if ($status != 'registered' || $status != "actived") {
					redirect('partners/step-completed');
				}else{
					redirect('partners/dashboard');
				}
			} else {
				$this->session->set_flashdata('error', 'Username and Password do not match!');
				redirect('partners/login');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('partners/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('partners_id');
		$this->session->unset_userdata('partners_email');
		$this->session->unset_userdata('partners_name');

		redirect('partners/login');
	}
}
