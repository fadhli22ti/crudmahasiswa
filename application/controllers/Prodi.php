<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Prodi";
	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
		$this->load->view("layout/header",$data);
		$this->load->view("prodi/vw_prodi", $data);
		$this->load->view("layout/footer");
  }
  public function tambah()
  {
	  $data['judul'] = "Halaman Tambah Prodi";
	  $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	  $this->form_validation->set_rules('nama', 'Nama Prodi', 'required', [
		  'required' => 'Nama Prodi Wajib di isi'
	  ]);
	  $this->form_validation->set_rules('ruangan', 'Ruangan', 'required|integer', [
		  'required' => 'Ruangan Prodi Wajib di isi',
		  'integer' => 'Ruangan Harus Angka'
	  ]);
	  $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
		  'required' => 'Jurusan Prodi Wajib di isi'
	  ]);
	  $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
		  'required' => 'Akreditasi Prodi Wajib di isi'
	  ]);
	  $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
		  'required' => 'Nama Kaprodi Wajib di isi'
	  ]);
	  $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|integer', [
		  'required' => 'Tahun Berdiri Prodi Wajib di isi',
		  'integer' => 'Tahun Berdiri Harus Angka'
	  ]);
	  $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
		  'required' => 'Output Lulusan Prodi Wajib di isi'
	  ]);
	  if ($this->form_validation->run() == FALSE) {
		  $this->load->view("layout/header", $data);
		  $this->load->view("prodi/vw_tambah_Prodi", $data);
		  $this->load->view("layout/footer", $data);
	  } else {
		  $data = [
			  'nama' => $this->input->POST('nama'),
			  'ruangan' => $this->input->POST('ruangan'),
			  'jurusan' => $this->input->POST('jurusan'),
			  'akreditasi' => $this->input->POST('akreditasi'),
			  'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
			  'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
			  'output_lulusan' => $this->input->POST('output_lulusan'),
		  ];
		  $upload_image = $_FILES['gambar']['name'];
		  if ($upload_image) {
			  $config['allowed_types'] = 'gif|jpg|png';
			  $config['max_size'] = '2048';
			  $config['upload_path'] = './assets/img/prodi';
			  $this->load->library('upload', $config);
			  if ($this->upload->do_upload('gambar')) {
				  $new_image = $this->upload->data('file_name');
				  $this->db->set('gambar', $new_image);
			  } else {
				  echo $this->upload->display_errors();
			  }
			  $this->Prodi_model->insert($data);
			  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Prodi Berhasil Ditambah!</div>');
			  redirect('Prodi');
		  }
	  }
  }

	  public function hapus($id)
	  {
		  $this->Prodi_model->delete($id);
		  $error = $this->db->error();
		  if ($error['code'] != 0) {
			  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>
			   Data Prodi Tidak Dapat Dihapus (Sudah Berelasi)!</div>');
		  } else {
			  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i>
			   Data Prodi Berhasil Dihapus!</div>');
  
		  }
		  redirect('Prodi');
	  }

	public function edit($id)
	{
		$data['judul'] = "Halaman Ubah Prodi";
		$data['prodi'] = $this->Prodi_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Prodi', 'required', [
			'required' => 'Nama Prodi Wajib di isi'
		]);
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required|integer', [
			'required' => 'Ruangan Prodi Wajib di isi',
			'integer' => 'Ruangan Harus Angka'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
			'required' => 'Jurusan Prodi Wajib di isi'
		]);
		$this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
			'required' => 'Akreditasi Prodi Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
			'required' => 'Nama Kaprodi Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|integer', [
			'required' => 'Tahun Berdiri Prodi Wajib di isi',
			'integer' => 'Tahun Berdiri Harus Angka'
		]);
		$this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
			'required' => 'Output Lulusan Prodi Wajib di isi'
		]);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("layout/header", $data);
			$this->load->view("prodi/vw_ubah_prodi", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->POST('nama'),
				'ruangan' => $this->input->POST('ruangan'),
				'jurusan' => $this->input->POST('jurusan'),
				'akreditasi' => $this->input->POST('akreditasi'),
				'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
				'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
				'output_lulusan' => $this->input->POST('output_lulusan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/prodi';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['prodi']['gambar'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/prodi' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->POST('id');
			$this->Prodi_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Prodi Berhasil Diubah!</div>');
			redirect('Prodi');
		}

	}
}

