<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditGalleryController extends CI_Controller
{

    public function index()
    {
        $this->load->view('partners/edit_gallery.php');
    }
}
