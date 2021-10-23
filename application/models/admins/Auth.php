<?php 
class Auth extends CI_Model 
{
	function login($email, $password)
	{
        $query = $this->db->get_where('users',array('email'=>$email));

        if($query->num_rows() > 0)
        {
            $data = $query->row();

            if (password_verify($password, $data->password)) {

                $this->session->set_userdata('admins_id',$data->id);
                $this->session->set_userdata('admins_email',$email);
				$this->session->set_userdata('admins_password',$data->$password);
				
                return TRUE;

            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	function check_auth()
	{
        if(empty($this->session->userdata('admins_id')))
        {
            redirect('admins/login');
        }
	}
}

