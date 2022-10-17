<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Session_model');
    }

    public function index()
    {
        $data['judul'] = 'Katalog Buku';
        $data['admin'] = $this->Session_model->session();
        $data['buku'] = $this->db->get('buku')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $data['judul'] = 'Katalog Buku';
        $data['admin'] = $this->Session_model->session();
        $data['buku'] = $this->db->get_where('buku')->result();


        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jumlahbuku', 'jumlahbuku', 'trim|required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
        $this->form_validation->set_rules('jenisbuku', 'Jenis Buku', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('buku/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $buku = [
                'nama' => $this->input->post('nama'),
                'jumlahbuku' => $this->input->post('jumlahbuku'),
                'penerbit' => $this->input->post('penerbit'),
                'jenisbuku' => $this->input->post('jenisbuku'),
            ];

            $this->db->insert('buku', $buku);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            Data berhasil, Admin telah ditambahkan.</div>');
            redirect('Buku');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Katalog Buku';
        $data['admin'] = $this->Session_model->session();
        $data['buku'] = $this->db->get_where('buku', ['id' => $id])->row();


        $this->load->view('templates/header', $data);
        $this->load->view('buku/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data['judul'] = 'Katalog Buku';
        $data['admin'] = $this->Session_model->session();

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jumlahbuku', 'jumlahbuku', 'trim|required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
        $this->form_validation->set_rules('jenisbuku', 'Jenis Buku', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('buku/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->input->post('id');
            $update = [
                'nama' => $this->input->post('nama'),
                'penerbit' => $this->input->post('penerbit'),
                'jumlahbuku' => $this->input->post('jumlahbuku'),
                'jenisbuku' => $this->input->post('jenisbuku'),
            ];

            $this->db->where('id', $id);
            $this->db->update('buku', $update);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            Data berhasil di Update, Admin telah ditambahkan.</div>');
            redirect('Buku');
        }
    }
}
