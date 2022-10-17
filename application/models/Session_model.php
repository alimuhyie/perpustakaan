<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Session_model extends CI_Model
{

    public function session()
    {
        $sesi =
            $this->session->userdata('email');

        $query = $this->db->query("SELECT users.*, user_role.`user_role`
                FROM users
                JOIN user_role 
                where users.`role_id` = user_role.`id`
                AND users.`email` = '$sesi'");
        return $query->row_array();
    }
}

/* End of file Session_model.php */
