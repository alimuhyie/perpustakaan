<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Session_model');
    }


    public function index()
    {
        $data['user'] = $this->db->query('select * from user')->result();
        $data['admin'] = $this->Session_model->session();
        $data['judul'] = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'this email has been registered!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        // $this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Admin';

            $this->load->view('templates/header', $data);
            $this->load->view('admin/regis');
            $this->load->view('templates/footer');
        } else {

            $data = [
                'name' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'is_active' => '1',
                'role_id' => '1',
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            Registrasi berhasil, Admin telah ditambahkan.</div>');
            redirect('Admin');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['id' => $id])->row();
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
        $this->db->delete('user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Pesan!</h5>
            Data Admin telah dihapus.</div>');
        redirect('Admin');
    }
}

/* End of file Admin.php */
