<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Session_model');
        $this->load->model('Query_model');
    }


    public function index()
    {
        // $data['user'] = $this->db->query('select * from users')->result();
        $data['anggota'] = $this->Query_model->kartu()->result();

        $data['admin'] = $this->Session_model->session();
        $data['judul'] = 'Anggota';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['admin'] = $this->Session_model->session();

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', [
            'is_unique' => 'this email has been registered!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('tempatlahir', 'tempatlahir', 'trim|required');
        $this->form_validation->set_rules('tanggallahir', 'tanggallahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        // $this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah Anggota';

            $this->load->view('templates/header', $data);
            $this->load->view('admin/regis');
            $this->load->view('templates/footer');
        } else {
            $id =  $this->Query_model->buat_id('users', 'AG', 'id', 'ORDER BY id DESC LIMIT 1');
            $anggota = [
                'id_anggota' => $id,
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempatlahir', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggallahir', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'is_active' => '1',
                'role_id' => $this->input->post('role_id'),
                'date_created' => time('ymd')
            ];



            $this->db->insert('users', $anggota);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            Registrasi berhasil, Admin telah ditambahkan.</div>');
            redirect('Anggota');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('users', ['id' => $id])->row();
        $data['admin'] = $this->Session_model->session();
        $data['judul'] = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/lihatdata', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->db->where('id', $id);
        $this->db->delete('users');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            Data Admin telah dihapus.</div>');
        redirect('Anggota');
    }
}

/* End of file Admin.php */
