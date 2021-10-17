<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelpCenterController extends CI_Controller {

	public function index()
	{
		$this->load->view('help_center');
	}
}
