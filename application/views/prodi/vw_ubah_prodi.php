<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo 'Halaman Ubah Prodi'; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Prodi

                </div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $prodi['id'] ?>" id="id" class="form-control">
						<div class="form-group mb-2 ">
							<label for="nama_prodi">Nama Prodi</label>
							<input type="text" value="<?= $prodi['nama'] ?>" name="nama" id="nama_prodi"
								class="form-control" placeholder="Nama Prodi">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="ruangan">Ruangan</label>
							<input type="text" value="<?= $prodi['ruangan'] ?>" name="ruangan" id="ruangan"
								class="form-control" placeholder="Ruangan">
							<?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="jurusan">Jurusan</label>
							<input type="text" value="<?= $prodi['jurusan'] ?>" name="jurusan" id="jurusan"
								class="form-control" placeholder="Jurusan">
							<?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="akreditasi">Akreditasi</label>
							<input type="text" value="<?= $prodi['akreditasi'] ?>" name="akreditasi" id="akreditasi"
								class="form-control" placeholder="Akreditasi">
							<?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="nama_kaprodi">Nama Kaprodi</label>
							<input type="text" value="<?= $prodi['nama_kaprodi'] ?>" name="nama_kaprodi"
								id="nama_kaprodi" class="form-control" placeholder="Nama Kaprodi">
							<?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="tahun_berdiri">Tahun Berdiri</label>
							<input type="text" value="<?= $prodi['tahun_berdiri'] ?>" name="tahun_berdiri"
								id="tahun_berdiri" class="form-control" placeholder="Tahun Berdiri">
							<?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="output_lulusan">Output Lulusan</label>
							<input type="text" value="<?= $prodi['output_lulusan'] ?>" name="output_lulusan"
								id="output_lulusan" class="form-control" placeholder="Output Lulusan">
							<?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<img src="<?= base_url('assets/img/prodi/') . $prodi['gambar'] ?>" style="width: 100px;"
								class="img-tumbnail" alt="">
							<div class="custom-file">
								<input type="file" name="gambar"
								id="gambar" class="custom-file-input form-control" placeholder="Gambar">
								<label for="output_lulusan">Choose File</label>
								<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
						</div>

                        <a href="<?= base_url('index.php/Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Ubah Prodi
                        </button>

                    </form>

                </div>
