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

	public function show()
	{
		$service = (!empty($this->input->get('service')) ? $this->input->get('service') : "");

		$search = (!empty($this->input->get('search')) ? $this->input->get('search') : "");

		$page = (!empty($this->input->get('page')) ? $this->input->get('page') * 6 : 0);

		$data = array();
		$partners = $this->partner->show($page, 6, $search, $service)->result();
		$total_row = $this->partner->show_total($search, $service)->num_rows();


		$i = 0;
		foreach($partners as $partner){

			$thumbnails = $this->partnergallery->show_thumbnail($partner->id)->row();

			$data[$i] = array(
				'id' => $partner->id,
				'name' => $partner->name,
				'icon' => $partner->icon,
				'thumbnail' => $thumbnails->source,
				'highlight' => $partner->highlight,
				'latitude' => $partner->latitude,
				'longitude' => $partner->longitude,
				'total_likes' => $partner->total_likes,
			);
			$i++;
		}

		$this->output
		->set_content_type('application/json')
		->set_output(
			json_encode(
				array(
					'data'=>$data,
					'pagination'=>array(
						'total_row'=> ceil($total_row / 6),
						'page'=>$page
					)
				)
			)
		);

	}
	public function show_detail(){

	}
	public function show_nearby($latitude, $longtitude)
	{
		$data = array();
		$partners = $this->partner->show_nearby($latitude, $longtitude)->result();
		

		$i = 0;
		foreach($partners as $partner){

			$thumbnails = $this->partnergallery->show_thumbnail($partner->id)->row();
			
			$data[$i] = array(
				'id' => $partner->id,
				'name' => $partner->name,
				'icon' => $partner->icon,
				'thumbnail' => $thumbnails->sources,
				'highlight' => $partner->highlight,
				'latitude' => $partner->latitude,
				'longitude' => $partner->longitude,
				'distance' => $partner->distance,
				'total_likes' => $partner->total_likes,
			);
			$i++;
		}


		$this->output
		->set_content_type('application/json')
		->set_output(
			json_encode($data)
		);
	}
}
