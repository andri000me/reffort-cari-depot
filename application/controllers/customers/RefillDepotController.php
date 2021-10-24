<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefillDepotController extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();

		$this->load->model('customers/auth');
		$this->load->model('service');

		$this->auth->check_auth();
	}

	public function index()
	{
		$data['services'] = $this->service->show()->result();

		$this->load->view('customers/refill-depot.php', $data);
	}
}
