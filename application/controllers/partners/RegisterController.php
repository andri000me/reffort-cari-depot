<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{
    public function index()
    {
        $this->load->view('partners/register_partners');
    }
}
