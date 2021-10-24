<?php 
class Migration extends CI_Model
{
	function users(){

	$this->db->query("TRUNCATE TABLE users");
		for($i = 1; $i < 100; $i++){
			$query = "INSERT INTO users(name, email, password, phone_number, created_at
			) VALUES('Customers {$i}', 'customers{$i}@gmail.com', '".password_hash("12345678",PASSWORD_DEFAULT)."',
			'08".rand(123,999).rand(1234,9999).rand(1234,9999)."', '".date('Y-m-d H:i:s')."')";
			$this->db->query($query);
		}
		return true;
	}

	function admins(){

	$this->db->query("TRUNCATE TABLE admins");
		for($i = 1; $i < 5; $i++){
			$query = "INSERT INTO admins(name, email, password, role, created_at
			) VALUES('Admins {$i}', 'admin{$i}@gmail.com', '".password_hash("12345678",PASSWORD_DEFAULT)."', 'super admin', '".date('Y-m-d H:i:s')."')";
			$this->db->query($query);
		}
		return true;
	}
	function partners(){

	$this->db->query("TRUNCATE TABLE partners");
		for($i = 0; $i < 20; $i++){
			$lat = "-6.1".rand(777777, 999999) ;
			$lng = "106.8".rand(111111, 555555);
			$name = $this->generateRandomConsonan().$this->generateRandomVocal().$this->generateRandomConsonan().$this->generateRandomVocal().$this->generateRandomConsonan();

			$query = "INSERT INTO partners(name, email, password, phone_number, icon, highlight, description, latitude, longitude, address, created_at
			) VALUES('{$name} Depot', 'depot{$i}@gmail.com', '".password_hash("12345678",PASSWORD_DEFAULT)."', '08000000{$i}',
			'assets/images/resource/retail-icon.png', 'Refill Depot', '<p>Lorem Ipsum is simply dummy text of the printing and
				typesetting industry.</p>', '{$lat}',
			'$lng', 'Jl. XXXXXX', '".date('Y-m-d H:i:s')."'
			)";
			$this->db->query($query);
		}
		return true;
	}

	function partner_services(){

	$this->db->query("TRUNCATE TABLE partner_services");
	
		for($i = 1; $i < 20; $i++){
			for($j = 1; $j <= 5; $j++){
				$status = array("ready in stock", "limited stock", "out of stock", "not available service");
				
				$rand_idx = rand(0,3);

				$query = "INSERT INTO partner_services(id_service, id_partner, status, created_at) VALUES('{$j}', '{$i}', '".$status[$rand_idx]."', '".date('Y-m-d H:i:s')."');";
				$this->db->query($query);

			}
			
		}
		return true;
	}
	function partner_likes(){

	$this->db->query("TRUNCATE TABLE partner_likes");

		for($i = 1; $i < 200; $i++){
			$query = "INSERT INTO partner_likes(id_partner, id_user, created_at
			) VALUES('".rand(1,20)."', '".rand(1,100)."','".date('Y-m-d H:i:s')."'
			)";

			$this->db->query($query);
		}
		return true;
	}

	function partner_licenses(){

	$this->db->query("TRUNCATE TABLE partner_licenses");

		for($i = 1; $i < 20; $i++){
			$status=array("registered","approved","rejected");

			$query = "INSERT INTO partner_licenses(id_partner, source, start_date, end_date, status, created_at
			) VALUES('{$i}', 'assets/images/license/siup.jpg', '2021-".rand(1,12)."-".rand(1,30)."',
			'2025-".rand(1,12)."-".rand(1,30)."', '".$status[rand(0,2)]."',
			'".date('Y-m-d H:i:s')."')";

			$this->db->query($query);
			
		}
		return true;
	}
	function partner_gallerys(){

	$this->db->query("TRUNCATE TABLE partner_gallerys");

		for($i = 1; $i < 20; $i++){
			$query = "INSERT INTO partner_gallerys(id_partner, source, type, created_at
			) VALUES('{$i}', 'assets/images/depot/".rand(1,9).".jpg', 'foto', '".date('Y-m-d H:i:s')."'
			)";

			$this->db->query($query);
			
			$query = "INSERT INTO partner_gallerys(id_partner, source, type, created_at
			) VALUES('{$i}', 'assets/images/depot/".rand(1,9).".jpg', 'foto', '".date('Y-m-d H:i:s')."'
			)";

			$this->db->query($query);

			$query = "INSERT INTO partner_gallerys(id_partner, source, type, created_at
			) VALUES('{$i}', 'https://youtube.com/embed/Igju98RWYOc', 'video', '".date('Y-m-d H:i:s')."'
			)";
			$this->db->query($query);
		}
		return true;
	}
	function partner_schedules(){

	$this->db->query("TRUNCATE TABLE partner_schedules");

		for($i = 1; $i < 20; $i++){
			for($j = 1; $j <= 7; $j++){
				$query = "INSERT INTO partner_schedules(id_partner, id_schedule_day, open_time, close_time, created_at
				) VALUES('{$i}', '{$j}', '08:00:00', '15:00:00', '".date('Y-m-d H:i:s')."'
				)";
				$this->db->query($query);
			}
		}
		return true;
	}
	function partner_contacts(){

		$this->db->query("TRUNCATE TABLE partner_contacts");

		for($i = 1; $i < 20; $i++){

			$query = "INSERT INTO partner_contacts(id_partner, id_contact, contact, created_at
			) VALUES('{$i}', '1', '08".rand(123,999).rand(1111,9999).rand(1111,9999)."', '".date('Y-m-d H:i:s')."'
			)";

			$this->db->query($query);
			$query = "INSERT INTO partner_contacts(id_partner, id_contact, contact, created_at
			) VALUES('{$i}', '2', '628".rand(123,999).rand(1111,9999).rand(1111,9999)."', '".date('Y-m-d H:i:s')."'
			)";

			$this->db->query($query);

			$query = "INSERT INTO partner_contacts(id_partner, id_contact, contact, created_at
			) VALUES('{$i}', '3', '".$this->generateRandomString()."@gmail.com', '".date('Y-m-d H:i:s')."'
			)";

			$this->db->query($query);
			
		}
		return true;
	}
	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	function generateRandomConsonan($length = 1) {
		$characters = 'BCDFGHJKLMNPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	function generateRandomVocal($length = 1) {
		$characters = 'AIUEO';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

}
