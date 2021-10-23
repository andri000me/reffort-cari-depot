<?php 
class Migration extends CI_Model
{
	function partners(){
		for($i = 0; $i < 20; $i++){
			$lat = "-6.18{$i}417" ;
			$lng = "106.86{$i}125";
			$query = "INSERT INTO partners(name, email, password, phone_number, icon, highlight, description, latitude, longitude, address, created_at
			) VALUES('Depot {$i}', 'depot{$i}@gmail.com', '".password_hash("12345678",PASSWORD_DEFAULT)."', '08000000{$i}',
			'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and
				typesetting industry.</p>', '{$lat}',
			'$lng',
			'Jl. XXXXXX', '".date('Y-m-d H:i:s')."'
			)";
			$this->db->query($query);
		}
		return true;
	}

	function partner_services(){
		for($i = 0; $i < 20; $i++){
			
			$query = "INSERT INTO partner_services(id_service, id_partner, status, created_at) VALUES('1', '{$i}', 'ready in stock', '".date('Y-m-d H:i:s')."');";
			$this->db->query($query);
			$query = "INSERT INTO partner_services(id_service, id_partner, status, created_at) VALUES('2', '{$i}', 'ready in
			stock', '".date('Y-m-d H:i:s')."');";
			$this->db->query($query);
			$query = "INSERT INTO partner_services(id_service, id_partner, status, created_at) VALUES('3', '{$i}', 'limited
			stock', '".date('Y-m-d H:i:s')."');";
			$this->db->query($query);
			$query = "INSERT INTO partner_services(id_service, id_partner, status, created_at) VALUES('4', '{$i}', 'out of
			stock', '".date('Y-m-d H:i:s')."');";
			$this->db->query($query);
		}
		return "Success Migrate Partner Service";
	}
}
