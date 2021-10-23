<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RefillDepotController extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();

		$this->load->model('customers/auth');
		$this->load->model('admin');
		$this->load->model('banner');
		$this->load->model('contact');
		$this->load->model('partner');
		$this->load->model('partnercontact');
		$this->load->model('partnergallery');
		$this->load->model('partnerlicense');
		$this->load->model('partnerlike');
		$this->load->model('partnerschedule');
		$this->load->model('partnerservice');
		$this->load->model('service');
		$this->load->model('scheduleday');
		$this->load->model('user');

		$this->auth->check_auth();
	}

	public function index()
	{
		$data['services'] = $this->service->show()->result();

		$this->load->view('customers/refill-depot.php', $data);
	}
}
