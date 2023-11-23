<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataDiri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('DataDiri_model');

	}

	public function index()
	{
		$data['judul'] = "Halaman Data Diri";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['DataDiri'] = $this->DataDiri_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("DataDiri/vw_DataDiri", $data);
		$this->load->view("layout/footer", $data);

	}
	public function tambah()
	{
		$data['judul'] = "Halaman Tambah DataDiri";
		$data['user'] = $this->db->get_where('user', [
			'email' =>
				$this->session->userdata('email')
		])->row_array();
		$this->form_validation->set_rules('nama', 'Nama DataDiri', 'required', [
			'required' => 'Nama Wajib di isi'
		]);
		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'NIM Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', [
			'required' => 'tanggal_lahir Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'alamat', 'required', [
			'required' => 'alamat Wajib di isi'
		]);
		$this->form_validation->set_rules('email', 'email', 'required|valid_email', [
			'required' => 'email  Wajib di isi',
            'valid_email'=> 'email harus valid'
		]);
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
			'required' => 'NO HP  Wajib di isi',
			'integer' => 'NO HP harus Angka'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("DataDiri/vw_tambah_DataDiri", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email'),
				'no_hp' => $this->input->post('no_hp'),
			];
			$this->DataDiri_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
role="alert">Data Diri Berhasil Ditambah!</div>');
			redirect('DataDiri');
		}
	}


	public function detail($id)
	{
		$data['judul'] = "Halaman Detail Data Diri";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['DataDiri'] = $this->DataDiri_model->getById($id);
		$this->load->view("layout/header", $data);
		$this->load->view("DataDiri/vw_detail_DataDiri", $data);
		$this->load->view("layout/footer");
	}
	public function hapus($id)
	{
		$this->DataDiri_model->delete($id);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Diri Berhasil Dihapus!</div>');
		redirect('DataDiri');
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah DataDiri";
		$data['DataDiri'] = $this->DataDiri_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama DataDiri', 'required', [
			'required' => 'Nama Wajib di isi'
		]);
		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'NIM Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', [
			'required' => 'tanggal_lahir Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'alamat', 'required', [
			'required' => 'alamat Wajib di isi'
		]);
		$this->form_validation->set_rules('email', 'email', 'required|valid_email', [
			'required' => 'email  Wajib di isi',
            'valid_email'=> 'email harus valid'
		]);
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
			'required' => 'NO HP  Wajib di isi',
			'integer' => 'NO HP harus Angka'
		]);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("layout/header", $data);
			$this->load->view("DataDiri/vw_ubah_DataDiri", $data);
			$this->load->view("layout/footer", $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email'),
				'no_hp' => $this->input->post('no_hp'),
			];
			$id = $this->input->POST('id');
			$this->DataDiri_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Diri Berhasil Diubah!</div>');
			redirect('DataDiri');
		}
	}
}
?>