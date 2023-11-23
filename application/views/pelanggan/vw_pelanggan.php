<div class="container-fluid p-0">
			<h1 class="h3 mb-4 text-gray-800">
				<?php echo $judul; ?>
			</h1>
			<div class="row">
				<div class="col-md-6"><a href="<?= base_url('') ?>Pelanggan/tambah" class="btn btn-info mb-2">Tambah Pelanggan</a>

				</div>
			</div>
			<div class="col-md-12">
				<?= $this->session->flashdata('message'); ?>
				<table class="table">
					<thead>
						<tr>
							<td>No</td>
							<td>Nama</td>
							<td>Alamat</td>
							<td>No HP</td>
							<td>Email</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach($pelanggan as $us): ?>
						<tr>
							<td><?= $i;?>.</td>
							<td><?= $us['nama_pelanggan']?></td>
							<td><?= $us['alamat']?></td>
							<td><?= $us['no_hp']?></td>
							<td><?= $us['email']?></td>
							<td>
								<a href="<?= base_url('Pelanggan/hapus/') . $us['id_pelanggan']?>" class="btn btn-danger">Hapus</a>
								<a href="<?= base_url('Pelanggan/edit/') . $us['id_pelanggan']?>" class="btn btn-warning">Edit</a>
								<a href="<?= base_url('Pelanggan/detail/') . $us['id_pelanggan']?> " class="btn btn-info">Detail</a>
							</td>
						</tr>
						<?php $i++;?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>

		</div>
	</main>
