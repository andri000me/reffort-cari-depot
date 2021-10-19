<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LicenseDocumentController extends CI_Controller {
 
	public function index()
	{
		$this->load->view('partners/license_document.php');
	}
}