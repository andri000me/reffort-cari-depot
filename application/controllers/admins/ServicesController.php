<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicesController extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
        
		$this->load->model('admins/auth');

		$this->auth->check_auth();
	}
	public function index()
	{
		$this->load->view('admins/dashboard.php');
	}
}
