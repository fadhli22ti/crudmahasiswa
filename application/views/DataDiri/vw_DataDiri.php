<div id="layoutSidenav_content">
            
         <div class="container-fluid px-3">
             <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
             <div class="row">
                 <div class="col-md-6"><a href="<?= base_url() ?>index.php/DataDiri/tambah" class="btn btn-info mb-2">Tambah Data Diri</a></div>
             </div>
             <div class="col-md-12">
                <?= $this->session->flashdata('message'); ?>
                 <table class="table">
                     <thead>
                         <tr>
                             <td>No</td>
                             <td>Nama</td>
                             <td>Nim</td>
                             <td>email</td>
                             <td>Aksi</td>
                         </tr>
                     </thead>
                     <tbody>
                     <?php $i = 1; ?>
                            <?php foreach ($DataDiri as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['nim']; ?></td>
                                    <td><?= $us['email']; ?></td>
                                    <td>
                                        <a href="<?= base_url('index.php/DataDiri/hapus/') . $us['id']; ?>" class="btn btn-outline-danger">Hapus</a>
                                        <a href="<?= base_url('index.php/DataDiri/edit/') . $us['id']; ?>" class="btn btn-outline-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </div>