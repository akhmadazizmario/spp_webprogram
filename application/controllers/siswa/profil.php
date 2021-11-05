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
        $this->form_validation->set_rules('nama', 'Nama_siswa', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|max_length[12]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar2', $data);
            $this->load->view('siswa/profil/profil', $data);
            $this->load->view('layout/footer');
        } else {
            $data = [
                'username' => html_escape($this->input->post('username', true)),
                'password' => html_escape(sha1($this->input->post('password', true)))
            ];
            $this->User2_m->insert('siswa', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data User Berhasil Ditambahkan.</div>');
            redirect('siswa/profil');
        }
    }
    public function ubahSiswa($id)
    {
        $data['user'] = $this->Auth2_m->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        $where = ['id_siswa' => $id];
        $data['siswa'] = $this->User2_m->get_where('siswa', $where)->row_array();
        $data['title'] = 'Ubah Data siswa ';

        $this->form_validation->set_rules('nama_siswa', 'nama lengkap', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|max_length[12]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar2', $data);
            $this->load->view('siswa/profil/ubah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->ubahDataSiswa();
        }
    }

    public function ubahDataSiswa()
    {
        $idUser = $this->input->post('id_siswa');
        $data = [
            'password' => html_escape(sha1($this->input->post('password', true))),
            'username' => html_escape($this->input->post('username', true)),
            'nama lengkap' => html_escape($this->input->post('nama_siswa', true))
        ];
        $this->db->where('id_siswa', $idUser);
        $this->User2_m->update('siswa', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data User Berhasil Diubah.</div>');
        redirect('siswa/profil');
    }
}
