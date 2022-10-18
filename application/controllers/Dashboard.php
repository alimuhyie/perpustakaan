<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Session_model');
    }

    public function index()
    {
        $data['admin'] = $this->Session_model->session();
        $data['jumlah_anggota'] = $this->db->query("SELECT COUNT(*) AS jumlah_angg FROM users");
        var_dump($data['jumlah_anggota']);
        die;
        $data['judul'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */
