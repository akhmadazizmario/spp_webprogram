<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
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
		$data['title'] = 'Transaksi';
		$data['user'] = $this->Auth2_m->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('nis', 'NIS', 'required|trim', ['required' => ' wajib di isi!.']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header2', $data);
			$this->load->view('layout/sidebar2', $data);
			$this->load->view('layout/topbar2', $data);
			$this->load->view('siswa/transaksi/transaksi', $data);
			$this->load->view('layout/footer');
		} else {
			$this->cariTransaksi();
		}
	}

	public function cariTransaksi()
	{
		$data['title'] = 'Transaksi';
		$data['user'] = $this->Auth2_m->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
		$nis = $this->input->post('nis', true);
		$where = ['nis' => $nis];
		$data['siswa'] = $this->Transaksi2_m->get_where('siswa', $where)->row_array();
		$idSiswa = $data['siswa']['id_siswa'];

		if ($data['siswa'] == null) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"><i class="fas fa-info-circle"></i> NIS Siswa <strong>' . $nis . '</strong> Tidak Terdaftar.</div>');
			redirect('siswa/transaksi');
		}

		$where = ['id_siswa' => $idSiswa];
		$data['spp'] = $this->Transaksi2_m->get_where('spp', $where)->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar2', $data);
		$this->load->view('layout/topbar2', $data);
		$this->load->view('siswa/transaksi/transaksi', $data);
		$this->load->view('layout/footer');
	}

	public function bayar($nis, $id)
	{
		$data['user'] = $this->Auth2_m->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
		$hariIini = date('Y-m-d');
		$today = date('ymd');

		// membuat no bayar acak
		$today = date('ymd');
		$query = "SELECT max(no_bayar) AS last FROM spp WHERE no_bayar LIKE '$today%'";
		$data = $this->db->query($query)->result_array();
		$lastNoBayar = $data['last'];
		$lastNoUrut = substr($lastNoBayar, 6, 4);
		$nextNoUrut = $lastNoUrut;
		$nextNoBayar = $today . sprintf('%04s', $nextNoUrut);

		$where = ['id_spp' => $id];
		$data = [
			'no_bayar' => $nextNoBayar,
			'tgl_bayar' => $hariIini,
			'ket' => 'Lunas'
		];
		$this->Transaksi2_m->update_where('spp', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> NIS <strong>' . $nis . '</strong> Berhasil Di Bayar.</div>');
		redirect('siswa/transaksi');
	}
	public function batal($nis, $idSpp)
	{
		$where = ['id_spp' => $idSpp];
		$data = [
			'no_bayar' => null,
			'tgl_bayar' => null,
			'ket' => 'Belum Lunas'
		];
		$this->Transaksi2_m->update_where('spp', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> NIM <strong>' . $nis . '</strong> SPP Berhasil Di Bayar.</div>');
		redirect('siswa/transaksi');
	}

	public function cetak($nis, $idSpp)
	{
		$where = ['nis' => $nis];
		$data['siswa'] = $this->Transaksi2_m->get_where('siswa', $where)->row_array();
		$data['title'] = 'Laporan ' . $data['siswa']['nama_siswa'];
		$where = ['id_spp' => $idSpp];
		$data['bayar'] = $this->Transaksi2_m->get_join_where('spp', $where)->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('', $data);
		$this->load->view('layout/footer');
	}
}
