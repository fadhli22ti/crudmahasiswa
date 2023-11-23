<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pinjam extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pinjam_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Pinjam";
    $data['pinjam'] = $this->Pinjam_model->get();
		$this->load->view("layout/header");
		$this->load->view("pinjam/vw_pinjam", $data);
		$this->load->view("layout/footer");
  }
  public function tambah()
	{
		$data['judul'] = "Halaman Tambah Peminjam";
		$this->load->view("layout/header");
		$this->load->view("pinjam/vw_tambah_Pinjam", $data);
		$this->load->view("layout/footer");
	}

  public function hapus($id)
	{
		$this->Pinjam_model->delete($id);
		redirect('Pinjam');
	}
	function upload()
	{
		$data = [
			'nik' => $this->input->POST('nik'),
			'nama' => $this->input->POST('nama'),
			'alamat' => $this->input->POST('alamat'),
			'notelpon' => $this->input->POST('notelpon'),
			'email' => $this->input->POST('email'),
			'besar' => $this->input->POST('besar'),
			'durasi' => $this->input->POST('durasi'),
		];
		$this->Pinjam_model->insert($data);
		redirect('Pinjam');
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Peminjam";
		$data['pinjam'] = $this->Pinjam_model->getById($id);
		$this->load->view("layout/header");
		$this->load->view("prodi/vw_ubah_pinjam", $data);
		$this->load->view("layout/footer");
	}
	public function update()
	{
		$data = [
			'nik' => $this->input->POST('nik'),
			'nama' => $this->input->POST('nama'),
			'alamat' => $this->input->POST('alamat'),
			'notelpon' => $this->input->POST('notelpon'),
			'email' => $this->input->POST('email'),
			'besar' => $this->input->POST('besar'),
			'durasi' => $this->input->POST('durasi'),
		];
		$id = $this->input->POST('id');
		$this->Pinjam_model->update(['id' => $id], $data);
		redirect('Pinjam');
	}
}

