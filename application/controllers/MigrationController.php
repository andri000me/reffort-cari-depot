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
		$status_migration .= "<li>users : ".$this->migration->users()."</li>";
		$status_migration .= "<li>admins : ".$this->migration->admins()."</li>";
		$status_migration .= "<li>partners : ".$this->migration->partners()."</li>";
		$status_migration .= "<li>partner_likes : ".$this->migration->partner_likes()."</li>";
		$status_migration .= "<li>partner_licenses : ".$this->migration->partner_licenses()."</li>";
		$status_migration .= "<li>partner_services : ".$this->migration->partner_services()."</li>";
		$status_migration .= "<li>partner_gallerys : ".$this->migration->partner_gallerys()."</li>";
		$status_migration .= "<li>partner_schedules : ".$this->migration->partner_schedules()."</li>";
		$status_migration .= "<li>partner_contacts : ".$this->migration->partner_contacts()."</li>";

		echo "Migration Status :
		<div>
			<ul>
				".$status_migration."
			</ul>
		</div>
		
		";
	}
}
