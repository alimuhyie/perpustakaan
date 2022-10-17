<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Session_model');
        $this->load->model('Query_model');
    }


    public function index()
    {
        $data['judul'] = 'Peminjaman Buku';
        $data['admin'] = $this->Session_model->session();
        $data['pinjam'] = $this->Query_model->pinjam()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Transaksi.php */
