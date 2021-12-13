<?php 
class Partner extends CI_Model
{
    function show($offset, $limit, $search, $service){

		$query = "SELECT
		partners.id,
		partners.name,
		partners.icon,
		partners.highlight,
		partners.latitude,
		partners.longitude,
		IFNULL(partner_total_likes.total_likes,0) as total_likes
		FROM partners
		LEFT JOIN partner_total_likes ON partner_total_likes.id_partner = partners.id
		INNER JOIN partner_services ON partner_services.id_partner = partners.id
		INNER JOIN services ON services.id = partner_services.id_service
		 
		".($search != "" || $service != ""  ? " WHERE " : "")."
		".($search != "" ? "partners.`name` LIKE '%{$search}%'" : "")."
		".($search != "" && $service != ""  ? " AND " : "")."
		".($service != "" ? "services.id = '{$service}' AND partner_services.status != 'not available service' " : "")."
		GROUP BY partners.id
		LIMIT {$limit} OFFSET {$offset}
		";
		// echo $query;
		// exitt();
		return $this->db->query($query);
	}

    function show_all(){

		$query = "SELECT
		partners.id,
		partners.name,
		partners.icon,
		partners.highlight,
		partners.latitude,
		partners.longitude,
		DATE_FORMAT(partners.created_at, '%d %M %Y') as created_at,
		IFNULL(partner_total_likes.total_likes,0) as total_likes,
		count(IFNULL(partner_services.id,0)) as total_services
		FROM partners
		LEFT JOIN partner_total_likes ON partner_total_likes.id_partner = partners.id
		INNER JOIN partner_services ON partner_services.id_partner = partners.id
		INNER JOIN services ON services.id = partner_services.id_service 
		GROUP BY partners.id
		";
		// echo $query;
		// exitt();
		return $this->db->query($query);
	}
    function show_total($search, $service){

		$query = "SELECT
		partners.id
		FROM partners
		LEFT JOIN partner_total_likes ON partner_total_likes.id_partner = partners.id
		INNER JOIN partner_services ON partner_services.id_partner = partners.id
		INNER JOIN services ON services.id = partner_services.id_service
		 
		".($search != "" || $service != ""  ? " WHERE " : "")."
		".($search != "" ? "partners.`name` LIKE '%{$search}%'" : "")."
		".($search != "" && $service != ""  ? " AND " : "")."
		".($service != "" ? "services.id = '{$service}' AND partner_services.status != 'not available service' " : "")."
		GROUP BY partners.id
		";

		return $this->db->query($query);
	}
	
    function show_detail($id){

		$query = "SELECT
		partners.id,
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
		partners.updated_at
		FROM partners
		WHERE partners.id = '{$id}'
		";
		
		return $this->db->query($query);
	}
	
	
    function show_nearby($latitude, $longtitude){
		$latitude_from = $latitude - 0.03;
		$latitude_to = $latitude + 0.03;
		$longtitude_from = $longtitude - 0.03;
		$longtitude_to = $longtitude + 0.03;

		$query = "SELECT
		partners.id,
		partners.name,
		partners.icon,
		partners.highlight,
		partners.latitude,
		partners.longitude,
		SQRT(
			POW(69.1 * (latitude - {$latitude}), 2) +
			POW(69.1 * ({$longtitude} - longitude) * COS(latitude / 57.3), 2)
		) AS distance,
		IFNULL(partner_total_likes.total_likes,0) as total_likes
		FROM partners
		LEFT JOIN partner_total_likes ON partner_total_likes.id_partner = partners.id 
		HAVING distance < 25 ORDER BY distance

		LIMIT 6
		";
		
		return $this->db->query($query);
	}

}
