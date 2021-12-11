<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('partners/auth');
		$this->load->model('partner');
		$this->load->model('partnercontact');
		$this->load->model('partnergallery');
		$this->load->model('partnerlicense');
		$this->load->model('partnerlike');
		$this->load->model('partnerschedule');
		$this->load->model('partnerservice');

		$this->auth->check_auth();
	}
	public function index()
	{
		$this->load->view('partners/dashboard.php');
	}

}
