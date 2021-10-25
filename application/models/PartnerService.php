<?php 
class PartnerService extends CI_Model
{
    function show_detail($id){

		$query = "SELECT
		services.`name`,
		services.icon,
		partner_services.`status`
		FROM services
		LEFT JOIN partner_services ON partner_services.id_service = services.id
		LEFT JOIN partners ON partners.id = partner_services.id_partner
		WHERE partners.id = '{$id}' AND partner_services.status != 'not available service'
		";

		return $this->db->query($query);
	}
    function show_detail_available($id){

		$query = "SELECT
		services.`name`,
		services.icon,
		partner_services.`status`
		FROM services
		LEFT JOIN partner_services ON partner_services.id_service = services.id
		LEFT JOIN partners ON partners.id = partner_services.id_partner
		WHERE partners.id = '{$id}' AND partner_services.status != 'not available service'
		";

		return $this->db->query($query);
	}
}
