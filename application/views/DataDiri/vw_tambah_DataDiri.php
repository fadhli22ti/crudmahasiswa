<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Diri
                </div>

                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama"  value="<?=set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" value="<?=set_value('nim'); ?>" class="form-control" id="nim" placeholder="NIM">
                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">tanggal lahir</label>
                            <input type="date" name="tanggal_lahir" value="<?=set_value('tanggal_lahir'); ?>" class="form-control" id="tanggal_lahir" placeholder="tanggal_lahir">
                            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" value="<?=set_value('alamat'); ?>" class="form-control" id="alamat" placeholder="alamat">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" name="email" value="<?=set_value('email'); ?>" class="form-control" id="email" placeholder="email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">no hp</label>
                            <input type="text" name="no_hp" value="<?=set_value('no_hp'); ?>" class="form-control" id="no_hp" placeholder="no_hp">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <a href="<? base_url() ?>index.php/DataDiri" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Data Diri</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    