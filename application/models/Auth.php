<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function register($username,$password,$nama)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'nama'=>$nama
		);
		$this->db->insert('tb_user',$data_user);
	}
}
