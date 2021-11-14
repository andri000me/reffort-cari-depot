<?php
class Auth extends CI_Model
{
    function register($depot_name, $email, $password, $phone_number)
    {
        $data = array(

            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'name' => $depot_name,
            'phone_number' => $phone_number,
            'status' => "fresh",
        );

        $this->db->insert('partners', $data);
    }

    function login($email, $password)
    {
        $query = $this->db->get_where('partners', array('email' => $email));

        if ($query->num_rows() > 0) {
            $data = $query->row();

            if (password_verify($password, $data->password)) {

                $this->session->set_userdata('partners_id', $data->id);
                $this->session->set_userdata('partners_email', $email);
                $this->session->set_userdata('partners_name', $data->name);

                $this->session->set_flashdata('status', $data->status);

                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    function check_auth()
    {
        if (empty($this->session->userdata('partners_id'))) {
            redirect('partners/login');
        }
    }
}
