<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth2_m');
        $this->load->model('Transaksi2_m');
        cekSession();
    }

    public function index()
    {
        $data['user'] = $this->Auth2_m->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar2', $data);
        $this->load->view('siswa/laporan/index', $data);
        $this->load->view('layout/footer');
    }

    public function siswa()
    {
        $data['title'] = 'Laporan Siswa';
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $this->load->view('layout/header', $data);
        $this->load->view('siswa/laporan/laporan_siswa', $data);
        $this->load->view('layout/footer');
    }

    public function pembayaran()
    {
        $mulaiTgl = $this->input->post('mulai_tgl');
        $sampaiTgl = $this->input->post('sampai_tgl');
        $data = [
            'mulaiTgl' => $mulaiTgl,
            'sampaiTgl' => $sampaiTgl
        ];
        $data['title'] = 'Laporan Pembayaran';
        $data['bayar'] = $this->Transaksi2_m->get_join($mulaiTgl, $sampaiTgl)->result_array();
        $this->load->view('layout/header', $data);
        $this->load->view('siswa/laporan/laporan_pembayaran', $data);
        $this->load->view('layout/footer');
    }
}
