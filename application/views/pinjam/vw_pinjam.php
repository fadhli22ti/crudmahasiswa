<div class="main">
	<nav class="navbar navbar-expand navbar-light navbar-bg">
		<a class="sidebar-toggle js-sidebar-toggle">
			<i class="hamburger align-self-center"></i>
		</a>

		<div class="navbar-collapse collapse">
			<ul class="navbar-nav navbar-align">

				<li class="nav-item dropdown">
					<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
						<i class="align-middle" data-feather="settings"></i>
					</a>

					<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
						<img src="assets/static/img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1"
							alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
								data-feather="user"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
							Analytics</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="index.html"><i class="align-middle me-1"
								data-feather="settings"></i> Settings & Privacy</a>
						<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
							Help Center</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Log out</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<main class="content">
		<div class="container-fluid p-0">
			<h1 class="h3 mb-4 text-gray-800">
				<?php echo $judul; ?>
			</h1>
			<div class="row">
				<div class="col-md-6"><a href="<?= base_url('') ?>Pinjam/tambah" class="btn btn-info mb-2">Tambah Peminjam</a>

				</div>
			</div>
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<td>NIK</td>
							<td>Nama Lengkap</td>
							<td>Alamat</td>
							<td>No Telpon</td>
							<td>Email</td>
							<td>Besar Pinjaman</td>
							<td>Durasi Pinjaman</td>

						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach($pinjam as $us): ?>
						<tr>
							<td><?= $i;?>.</td>
							<td><?= $us['nik']?></td>
							<td><?= $us['nama']?></td>
							<td><?= $us['alamat']?></td>
							<td><?= $us['notelpon']?></td>
							<td><?= $us['besar']?></td>
							<td><?= $us['durasi']?></td>
							<td>
								<a href="<?= base_url('Pinjam/hapus/') . $us['id']?>" class="btn btn-danger">Hapus</a>
								<a href="<?= base_url('Pinjam/edit/') . $us['id']?>" class="btn btn-warning">Edit</a>
								<a href="<?= base_url('Pinjam/detail/') . $us['id']?> " class="btn btn-info">Detail</a>
							</td>
						</tr>
						<?php $i++;?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>

		</div>
	</main>
