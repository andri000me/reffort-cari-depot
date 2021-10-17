<?php 
class Service extends CI_Model
{
    function show(){
		return $this->db->get('services');
	}
}
