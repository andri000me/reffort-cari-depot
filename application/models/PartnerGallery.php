<?php 
class PartnerGallery extends CI_Model
{
    function show_thumbnail($id){

		$query = "SELECT
        partner_gallerys.id,
        partner_gallerys.source,
        partner_gallerys.type
		FROM partners
		INNER JOIN partner_gallerys ON partner_gallerys.id_partner = partners.id
		WHERE partners.id = '{$id}' AND partner_gallerys.type = 'foto'
        LIMIT 1
		";

		return $this->db->query($query);
	}
    function show_detail($id){

		$query = "SELECT
        partner_gallerys.id,
        partner_gallerys.source,
        partner_gallerys.type
		FROM partners
		INNER JOIN partner_gallerys ON partner_gallerys.id_partner = partners.id
		WHERE partners.id = '{$id}'
		";

		return $this->db->query($query);
	}

}
