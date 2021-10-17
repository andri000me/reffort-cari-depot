<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
	public function register()
	{
		$this->load->view('customers/register.php');
	}
	public function login()
	{
		$this->load->view('customers/login.php');
	}
}
