<?php 

class HelpCenter extends CI_Controller {

	public function index()
	{
		$this->load->view('help_center');
		$this->load->view('layouts/help.center.header.php');
		$this->load->view('layouts/customers.footer.php');
	}
}

 ?>