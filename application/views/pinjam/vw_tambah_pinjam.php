<div class="main">
<main class="content">
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo 'Halaman Tambah Prodi'; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Tambah Peminjam

                    </div>

                    <div class="card-body">
                        <form action="<?= base_url('Prodi/upload'); ?>" method="POST">
                            <div class="form-group">
                                <label for="nama prodi">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
                            </div>

                            <div class="form-group">
                                <label for="ruangan">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">

                            </div>

                            <div class="form-group">
                                <label for="jurusan">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">

                            </div>

                            <div class="form-group">
                                <label for="akreditasi">No Telpon</label>
								<input type="text" name="notelpon" class="form-control" id="notelpon" placeholder="No Telpon">
                                
                            </div>

                            <div class="form-group">
                                <label for="nama kaprodi">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                            </div>

                            <div class=" form-group">
                                <label for="tahun berdiri">Besar Pinjaman</label>
                                <input type="text" name="besar" class="form-control" id="tahun berdiri" placeholder="besar">

                            </div>
                            
                            <div class="form-group">
                                <label for="gelar lulusan">Durasi Pinjaman</label>
								<select name="durasi" id="durasi" class="form-control">
                                    <option value="">Pilih Durasi</option>
                                    <option value="30">30 Hari</option>
                                    <option value-"40">40 Hari</option>
                                    <option value-"60">60 Hari</option>
                                </select>
                            </div>

                            


                            <a href="<?= base_url('index.php/Pinjam') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">
                                Tambah Prodi
                            </button>

                        </form>

                    </div>

                </div>
</main>