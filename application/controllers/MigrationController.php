<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MigrationController extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('migration');
	}
	public function migrate()
	{
		$status_migration = "";
		$status_migration .= "<li>".$this->migration->partner_services()."</li>";

		echo "Migration Status :
		<div>
			<ul>
				".$status_migration."
			</ul>
		</div>
		
		";
	}
}
