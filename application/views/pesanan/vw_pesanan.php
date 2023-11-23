<div class="container-fluid p-0">
			<h1 class="h3 mb-4 text-gray-800">
				<?php echo $judul; ?>
			</h1>
			<div class="row">
				<div class="col-md-6"><a href="<?= base_url('') ?>Pesanan/tambah" class="btn btn-info mb-2">Tambah Pesanan</a>

				</div>
			</div>
			<div class="col-md-12">
				<?= $this->session->flashdata('message'); ?>
				<table class="table">
					<thead>
						<tr>
							<td>No</td>
							<td>id pelanggan</td>
							<td>Tanggal Pemesanan</td>
							<td>Tanggal Pengambilan</td>
							<td>Status Pesanan</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach($pesanan as $us): ?>
						<tr>
							<td><?= $i;?>.</td>
							<td><?= $us['id_pelanggan']?></td>
							<td><?= $us['tanggal_pesanan']?></td>
							<td><?= $us['tanggal_pengambilan']?></td>
							<td><?= $us['status_pesanan']?></td>
							<td>
								<a href="<?= base_url('Pesanan/hapus/') . $us['id_pesanan']?>" class="btn btn-danger">Hapus</a>
								<a href="<?= base_url('Pesanan/edit/') . $us['id_pesanan']?>" class="btn btn-warning">Edit</a>
								<a href="<?= base_url('Pesanan/detail/') . $us['id_pelanggan']?> " class="btn btn-info">Detail</a>
							</td>
						</tr>
						<?php $i++;?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>

		</div>
	</main>
