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

    public function pinjam()
    {
        $data['judul'] = 'Peminjaman Buku';
        $data['admin'] = $this->Session_model->session();
        // $data['pinjam'] = $this->Query_model->pinjam()->result();

        $this->form_validation->set_rules('id_anggota', 'Id Anggota', 'trim|required');
        $this->form_validation->set_rules('id_buku', 'Id Buku', 'trim|required');
        $this->form_validation->set_rules('lamapinjam', 'Lama Pinjaman', 'trim|required');
        $this->form_validation->set_rules('tanggalpinjam', 'Tanggal Pinjaman', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('transaksi/pinjam', $data);
            $this->load->view('templates/footer');
        } else {

            $pinjam = [
                'id_peminjam' => $this->input->post('id_anggota'),
                'id_buku' => $this->input->post('id_buku'),
                'lamapinjam' => $this->input->post('lamapinjam'),
                'tglpinjam' => $this->input->post('tanggalpinjam'),
            ];


            $this->db->insert('pinjam', $pinjam);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            Data berhasil ditambahkan.</div>');
            redirect('Pinjam');
        }
    }
}

/* End of file Transaksi.php */
