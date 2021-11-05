<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth2_m');
        $this->load->model('User2_m');
        cekSession();
    }

    public function index()
    {
        $data['title'] = 'siswa';
        $data['user'] = $this->Auth2_m->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa'] = $this->User2_m->get('siswa')->result_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|max_length[12]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar2', $data);
            $this->load->view('siswa/profil/profil', $data);
            $this->load->view('layout/footer');
        }
    }
}
