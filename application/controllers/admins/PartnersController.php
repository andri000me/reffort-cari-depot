<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PartnersController extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
        
		$this->load->model('admins/auth');
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
        $data["partners"] = $this->partner->show_all()->result();

		$this->load->view('admins/partners/partners.php', $data);
	}
	public function detail()
	{
		$id=$_GET['id'];
        $data["partners"] = $this->partner->show_detail($id)->result();
		$data['partner_contacts'] = $this->partnercontact->show_detail($id)->result();
		$data['partner_gallerys'] = $this->partnergallery->show_detail($id)->result();
		$data['partner_licenses'] = $this->partnerlicense->show_detail($id)->result();
		$data['partner_likes'] = $this->partnerlike->show_detail($id)->result();
		$data['partner_schedules'] = $this->partnerschedule->show_detail($id)->result();
		$data['partner_schedules_today'] = $this->partnerschedule->show_detail_today($id)->result();
		$data['partner_services_available'] = $this->partnerservice->show_detail_available($id)->result();
		$data['partner_services'] = $this->partnerservice->show_detail($id)->result();

		$this->load->view('admins/partners/detail.php', $data);
	}
	public function add()
	{
        $data["services"] = $this->service->show()->result();
        $data["contacts"] = $this->contact->show()->result();

		$this->load->view('admins/partners/add.php', $data);
	}
	public function save_add()
	{
		$config['upload_path']          = './assets/images/depot/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('thumbnail')) 
        {
            $error = array('error' => $this->upload->display_errors());
			
			print_r($error);
            // $this->load->view('imageupload_form', $error);
        } 
        else 
        {
            $data = array('image_metadata' => $this->upload->data());
 
			print_r($data);
            // $this->load->view('imageupload_success', $data);
        }
 
		$name = $this->input->post('name');
		$highlight = $this->input->post('highlight');
		$description = $this->input->post('description');
		$contact = $this->input->post('contact');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		$address = $this->input->post('address');

        $data = array(

            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'name' => $depot_name,
            'phone_number' => $phone_number,
            'status' => "fresh",
            'icon'=>'assets/images/resource/retail-icon.png'
        );

		// $this->db->query($query);
        $this->db->insert('partners', $data);
		 
	}
}
