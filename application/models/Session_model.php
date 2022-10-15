<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Session_model extends CI_Model
{

    public function session()
    {
        $query = $this->db->get_where('user', ['email' => $this->session->userdata('email')]);
        return $query->row_array();
    }
}

/* End of file Session_model.php */
