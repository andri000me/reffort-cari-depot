<?php 
class PartnerContact extends CI_Model
{
    function show_detail($id){

		$query = "SELECT
		partner_contacts.id,
        contacts.type,
        contacts.icon,
        partner_contacts.contact,
		contacts.action
		FROM partners
		LEFT JOIN partner_contacts ON partner_contacts.id_partner = partners.id
		INNER JOIN contacts ON contacts.id = partner_contacts.id_contact
		WHERE partners.id = '{$id}'
		";

		return $this->db->query($query);
	}
}
