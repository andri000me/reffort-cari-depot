<?php 
class Contact extends CI_Model 
{
    function show(){
		return $this->db->get('contacts');
	}

}
