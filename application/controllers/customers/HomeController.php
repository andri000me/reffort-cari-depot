<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();

		$this->load->model('customers/auth');
		$this->load->model('banner');
		$this->load->model('service');

		$this->auth->check_auth();
	}

	public function index()
	{
		$data['banners'] = $this->banner->show()->result();
		$data['services'] = $this->service->show()->result();
		// $data['partners'] = $this->partners->show()->result();

		$this->load->view('customers/home.php', $data);
	}
}
