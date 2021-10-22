<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{

    public function index()
    {
        $this->load->view('partners/profile');
    }
}
