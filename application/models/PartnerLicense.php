<?php 
class PartnerLicense extends CI_Model
{

    function show_detail($id){

		$query = "SELECT
        partner_licenses.source,
        partner_licenses.start_date,
        partner_licenses.end_date,
        partner_licenses.status
		FROM partners
		INNER JOIN partner_licenses ON partner_licenses.id_partner = partners.id
		WHERE partners.id = '{$id}'
		";

		return $this->db->query($query);
	}
}
