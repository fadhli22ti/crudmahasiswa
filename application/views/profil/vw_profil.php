<div class="container-fluid">
    <h1 class="h3  mb-3 text-gray-800">
        <?= $judul ?>
    </h1>
    <div class="card mb-3 ms-1" style="max-width:540px">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?=base_url('assets/img/profile/') . $user['gambar'] ?>" alt="" class="card-img">
            </div>
            <div class="col-md-8 ">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama'];?></h5>
                    <p class="card-text"><?= $user['email']?></p>
                    <p class="card-text"><small class="text-muted">Anggota Sejak <?= $user['date_created']?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>