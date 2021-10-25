<?php 
class PartnerLike extends CI_Model
{

    function show_detail($id){

		$query = "SELECT
        partners.id,
        count(partner_likes.id) as total_like
		FROM partners
		INNER JOIN partner_likes ON partner_likes.id_partner = partners.id
		WHERE partners.id = '{$id}'
		";

		return $this->db->query($query);
	}
}
