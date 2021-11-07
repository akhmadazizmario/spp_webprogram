<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth2_m');
    }

    public function index()
    {
        $this->cekLogin();
        $data['title'] = 'Halaman Login';
        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Username wajib di isi!.']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password wajib di isi!.']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('authsiswa/loginsiswa', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', PASSWORD_DEFAULT);

        $user = $this->Auth2_m->get_where('siswa', ['username' => $username])->row_array();
        if ($user != null) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'id_siswa' => $user['id_siswa'],
                ];
                $this->session->set_userdata($data);
                redirect('siswa/dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah!.</div>');
                redirect('auth2');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar!.</div>');
            redirect('auth2');
        }
    }

    public function cekLogin()
    {
        if ($this->session->userdata('username')) {
            redirect('siswa/dashboard');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Logout.</div>');
        redirect('auth2');
    }
}
