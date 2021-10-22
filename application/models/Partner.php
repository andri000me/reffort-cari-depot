<?php 
class Partner extends CI_Model
{
    function show($page_start, $page_end, $limit){
		return $this->db->get('partners');
	}
	
    function show_nearby($latitude, $longtitude){
		$latitude_from = $latitude - 0.01;
		$latitude_to = $latitude + 0.01;
		$longtitude_from = $longtitude - 0.01;
		$longtitude_to = $longtitude + 0.01;

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
		'{$longtitude_from}' AND '{$longtitude_to}'";
		
		return $this->db->query($query);
	}

	function migrate(){
		// for($i = 0; $i < 20; $i++){
		// 	$lat = "-6.18{$i}417" ;
		// 	$lng = "106.86{$i}125";
		// 	$query = "INSERT INTO partners(name, email, password, phone_number, icon, highlight, description, latitude, longitude, address, created_at
		// 	) VALUES('Depot {$i}', 'depot{$i}@gmail.com', '".password_hash("12345678",PASSWORD_DEFAULT)."', '08000000{$i}',
		// 	'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and
		// 		typesetting industry.</p>', '{$lat}',
		// 	'$lng',
		// 	'Jl. XXXXXX', '".date('Y-m-d H:i:s')."'
		// 	)";
		// 	$this->db->query($query);
		// }
		return true;
	}

}
