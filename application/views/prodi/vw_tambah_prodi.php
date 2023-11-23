<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo 'Halaman Tambah Prodi'; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Prodi

                </div>

                <div class="card-body" >
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-2 ">
                            <label for="nama_prodi">Nama Prodi</label>
                            <input type="text" name="nama" value="<?= set_value('nama') ?>" id="nama_prodi"
                                class="form-control" placeholder="Nama Prodi">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" id="ruangan" class="form-control"
                                value="<?= set_value('ruangan') ?>" placeholder="Ruangan">
                            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Jurusan"
                                value="<?= set_value('jurusan') ?>">
                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" id="akreditasi" class="form-control"
                                placeholder="Akreditasi" value="<?= set_value('akreditasi') ?>">
                            <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" id="nama_kaprodi" class="form-control"
                                placeholder="Nama Kaprodi" value="<?= set_value('nama_kaprodi') ?>">
                            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" id="tahun_berdiri" class="form-control"
                                placeholder="Tahun Berdiri" value="<?= set_value('tahun_berdiri') ?>">
                            <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group mb-2 ">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" name="output_lulusan" id="output_lulusan" class="form-control"
                                placeholder="Output Lulusan" value="<?= set_value('output_lulusan') ?>">
                            <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group mb-2 ">
							<label for="gambar">Gambar</label>
							<input type="file" name="gambar" id="gambar" class="custom-file-input form-control" placeholder="Gambar">
						</div>
                        <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Tambah Prodi
                        </button>

                    </form>

                </div>