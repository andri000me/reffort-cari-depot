<?php 
class User extends CI_Model
{

    function show(){

		$query = "SELECT
        name,
        email,
        phone_number,
        created_at
		FROM users
		";

		return $this->db->query($query);
	}
}
