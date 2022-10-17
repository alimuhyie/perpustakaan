<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Session_model');
    }


    public function index()
    {
        $data['judul'] = 'Anggota Perpustakaan';
        $data['admin'] = $this->Session_model->session();
        $data['anggota'] = $this->db->get_where('anggota')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Anggota Perpustakaan';
        $data['admin'] = $this->Session_model->session();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('anggota/tambah');
            $this->load->view('templates/footer');
        } else {

            $data = [
                'nama' => $this->input->post('nama'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'kelas' => $this->input->post('kelas'),
                'alamat' => $this->input->post('alamat'),
            ];
            $this->db->insert('anggota', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            Registrasi berhasil, Anggota Perpustakaan telah ditambahkan.</div>');
            redirect('Anggota');
        }
    }

    public function update($id)
    {


        $data['anggota'] = $this->db->get_where('anggota', ['id' => $id])->row();

        $data['judul'] = 'Tambah Anggota Perpustakaan';
        $data['admin'] = $this->Session_model->session();


        $this->load->view('templates/header', $data);
        $this->load->view('anggota/edit', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('tempatlahir', 'tempatlahir', 'trim|required');
        $this->form_validation->set_rules('tanggallahir', 'tanggallahir', 'trim|required');
        $this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');


        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $update = [
                'nama' => $this->input->post('nama'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'kelas' => $this->input->post('kelas'),
                'alamat' => $this->input->post('alamat'),

            ];
            $this->db->where('id', $id);
            $this->db->update('anggota', $update);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            Data berhasil diupdate.</div>');
            redirect('Anggota');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            data tidak berubah</div>');
            redirect('Anggota');
        }
    }
}

/* End of file Anggota.php */
