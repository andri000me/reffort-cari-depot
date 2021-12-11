<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GalleryController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('partners/auth');
		$this->auth->check_auth();
	}
    public function index()
    {
        $this->load->view('partners/gallery.php');
    }
}
