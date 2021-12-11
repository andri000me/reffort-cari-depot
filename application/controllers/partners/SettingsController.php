<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsController extends CI_Controller
{
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
		$this->load->model('service');
		$this->load->model('contact');

		$this->auth->check_auth();
	}
	public function index()
	{
		$this->load->view('partners/settings.php');
	}
	public function step_completed(){


        $data["services"] = $this->service->show()->result();
        $data["contacts"] = $this->contact->show()->result();

        $id = $this->session->userdata('partners_id');

        $data["partners"] = $this->partner->show_detail($id)->row();

		$this->load->view('partners/step_completed.php', $data);
	}
}
