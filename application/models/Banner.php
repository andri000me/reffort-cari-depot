<?php 
class Banner extends CI_Model 
{
    function show(){
		return $this->db->get('banners');
	}
}
