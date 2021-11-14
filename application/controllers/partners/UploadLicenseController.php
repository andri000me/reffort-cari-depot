<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UploadLicenseController extends CI_Controller
{

    public function index()
    {
        $this->load->view('partners/upload_license.php');
    }
}
