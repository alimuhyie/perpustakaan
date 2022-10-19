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
        $data['jum_anggota'] = $this->db->get('users')->num_rows();
        $data['jum_buku'] = $this->db->get('buku')->num_rows();
        $data['jum_pinjam'] = $this->db->get('pinjam')->num_rows();

        $data['judul'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */
