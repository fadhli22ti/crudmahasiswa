<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pelanggan_model');
		$this->load->model('Pesanan_model');
		$this->load->model('Pelanggan_model');

	}

	public function index()
	{
		$data['judul'] = "Halaman Pelanggan";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pelanggan'] = $this->Pelanggan_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("pelanggan/vw_pelanggan", $data);
		$this->load->view("layout/footer", $data);

	}
	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Pelanggan";
		$data['user'] = $this->db->get_where('user', [
			'email' =>
				$this->session->userdata('email')
		])->row_array();
		$data['prodi'] = $this->Prodi_model->get();
		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
			'required' => 'Nama Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'NIM Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Email Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('prodi', 'Prodi', 'required', [
			'required' => 'Prodi Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
			'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
			'required' => 'NO HP Mahasiswa Wajib di isi',
			'integer' => 'NO HP harus Angka'
		]);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Mahasiswa Wajib di isi',
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'email' => $this->input->post('email'),
				'prodi' => $this->input->post('prodi'),
				'alamat' => $this->input->post('alamat'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'no_hp' => $this->input->post('no_hp'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
			];
			$this->Mahasiswa_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
			redirect('Mahasiswa');
		}
	}


	public function detail($id)
	{
		$data['judul'] = "Halaman Detail Mahasiswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
		$this->load->view("layout/header", $data);
		$this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
		$this->load->view("layout/footer");
	}
	public function hapus($id)
	{
		$this->Mahasiswa_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Mahasiswa Berhasil Dihapus!</div>');
		redirect('Mahasiswa');
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->Prodi_model->get();
		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
			'required' => 'Nama Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'NIM Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Email Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('prodi', 'Prodi', 'required', [
			'required' => 'Prodi Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
			'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
			'required' => 'No HP Mahasiswa Wajib di isi',
			'integer' => 'No HP Harus Angka'
		]);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
		]);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("layout/header", $data);
			$this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
			$this->load->view("layout/footer", $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'email' => $this->input->post('email'),
				'prodi' => $this->input->post('prodi'),
				'alamat' => $this->input->post('alamat'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'no_hp' => $this->input->post('no_hp'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
			];
			$id = $this->input->POST('id');
			$this->Mahasiswa_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Mahasiswa Berhasil Diubah!</div>');
			redirect('Mahasiswa');
		}
	}
}
?>