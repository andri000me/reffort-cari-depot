<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
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

		$this->auth->check_auth();
	}

    public function index()
    {
        $id = $this->session->userdata('partners_id');

        $data["partners"] = $this->partner->show_detail($id)->result();

        $this->load->view('partners/profile', $data);
    }
	public function update(){
		print_r($this->input->post());
	}
}
