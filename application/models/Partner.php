<?php 
class Partner extends CI_Model
{
    function show($offset, $limit, $search, $service){

		$query = "SELECT
		partners.name,
		partners.email,
		partners.phone_number,
		partners.icon,
		partners.highlight,
		partners.description,
		partners.latitude,
		partners.longitude,
		partners.address,
		partners.created_at,
		partners.updated_at,
		IFNULL(partner_total_likes.total_likes,0) as total_likes
		FROM partners
		LEFT JOIN partner_total_likes ON partner_total_likes.id_partner = partners.id
		INNER JOIN partner_services ON partner_services.id_partner = partners.id
		INNER JOIN services ON services.id = partner_services.id_service
		WHERE partners.`name` LIKE '%{$search}%'
		".($service != "" ? " AND services.id = '{$service}'" : "")."
		GROUP BY partners.id
		LIMIT {$limit} OFFSET {$offset}
		";

		return $this->db->query($query);
	}
	
    function show_total($search, $service){

		$query = "SELECT
		partners.name,
		partners.email,
		partners.phone_number,
		partners.icon,
		partners.highlight,
		partners.description,
		partners.latitude,
		partners.longitude,
		partners.address,
		partners.created_at,
		partners.updated_at,
		IFNULL(partner_total_likes.total_likes,0) as total_likes
		FROM partners
		LEFT JOIN partner_total_likes ON partner_total_likes.id_partner = partners.id
		INNER JOIN partner_services ON partner_services.id_partner = partners.id
		INNER JOIN services ON services.id = partner_services.id_service
		WHERE partners.`name` LIKE '%{$search}%'
		".($service != "" ? " AND services.id = '{$service}'" : "")."
		GROUP BY partners.id
		";

		return $this->db->query($query);
	}
	
    function show_nearby($latitude, $longtitude){
		$latitude_from = $latitude - 0.1;
		$latitude_to = $latitude + 0.1;
		$longtitude_from = $longtitude - 0.1;
		$longtitude_to = $longtitude + 0.1;

		$query = "SELECT
		partners.name,
		partners.email,
		partners.phone_number,
		partners.icon,
		partners.highlight,
		partners.description,
		partners.latitude,
		partners.longitude,
		partners.address,
		partners.created_at,
		partners.updated_at,
		IFNULL(partner_total_likes.total_likes,0) as total_likes
		FROM partners
		LEFT JOIN partner_total_likes ON partner_total_likes.id_partner = partners.id 
		WHERE partners.latitude BETWEEN '{$latitude_from}' AND
		'{$latitude_to}' AND partners.longitude BETWEEN
		'{$longtitude_from}' AND '{$longtitude_to}'
		ORDER BY partners.latitude DESC";
		
		return $this->db->query($query);
	}

}
