<div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo 'Halaman Tambah Mahasiswa'; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Tambah Data Mahasiswa

                    </div>

                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                            <label for="nama">Nama</label>
							<input type="text" value="<?= set_value('nama') ?>" name="nama" id="nama"
								class="form-control" placeholder="Nama">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2">
							<label for="nim">Nim</label>
							<input type="text" value="<?= set_value('nim') ?>" name="nim" id="nim" class="form-control" placeholder="Nim">
							<?= form_error('nim', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2">
							<label for="jk">Jenis Kelamin</label>
							<select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" id="jk" class="form-control">
								<option value="">Jenis Kelamin</option>
								<option value="Laki-Laki">Laki Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2">
							<label for="email">Email</label>
							<input type="email" value="<?= set_value('email') ?>" name="email" id="email" class="form-control" placeholder="Email">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2">
							<label for="prodi">Prodi</label>
							<select name="prodi" id="prodi" value="<?= set_value('prodi') ?>" class="form-control">
								<option value="">Pilih Prodi</option>
								<?php foreach ($prodi as $p): ?>
									<option value="<?= $p['id'] ?>">
										<?= $p['nama'] ?>
									</option>
								<?php endforeach; ?>
							</select>
							<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2">
							<label for="asal_sekolah">Asal Sekolah</label>
							<input type="text" value="<?= set_value('asal_sekolah') ?>" name="asal_sekolah" id="asal_sekolah" class="form-control"
								placeholder="Asal Sekolah">
							<?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2">
							<label for="no_hp">Nomor Hp</label>
							<input type="text" value="<?= set_value('no_hp') ?>" name="no_hp" id="no_hp" class="form-control" placeholder="Nomor Hp">
							<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2">
							<label for="alamat">Alamat</label>
							<input type="text" value="<?= set_value('alamat') ?>" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
                            <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                Mahasiswa</button>

                        </form>

                    </div>

                </div>
</main>