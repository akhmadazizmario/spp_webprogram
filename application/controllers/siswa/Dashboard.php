<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth2_m');
        cekSession();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->Auth2_m->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar2', $data);
        $this->load->view('siswa/dashboard', $data);
        $this->load->view('layout/footer');
    }
}
