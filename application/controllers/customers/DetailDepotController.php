<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailDepotController extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();

		$this->load->model('customers/auth');
		$this->load->model('partner');
		$this->load->model('partnercontact');
		$this->load->model('partnergallery');
		$this->load->model('partnerlicense');
		$this->load->model('partnerlike');
		$this->load->model('partnerschedule');
		$this->load->model('partnerservice');

		$this->auth->check_auth();
	}
	public function index($id)
	{
		$data['partners'] = $this->partner->show_detail($id)->result();
		$data['partner_contacts'] = $this->partnercontact->show_detail($id)->result();
		$data['partner_gallerys'] = $this->partnergallery->show_detail($id)->result();
		$data['partner_licenses'] = $this->partnerlicense->show_detail($id)->result();
		$data['partner_likes'] = $this->partnerlike->show_detail($id)->result();
		$data['partner_schedules'] = $this->partnerschedule->show_detail($id)->result();
		$data['partner_schedules_today'] = $this->partnerschedule->show_detail_today($id)->result();
		$data['partner_services_available'] = $this->partnerservice->show_detail_available($id)->result();
		$data['partner_services'] = $this->partnerservice->show_detail($id)->result();

		$this->load->view('customers/detail-depot.php', $data);
	}
}
