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
        $data['judul'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */
