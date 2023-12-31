<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
	<meta name="author" content="AdminKit" />
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link rel="shortcut icon" href="<?= base_url('assets/static/') ?>img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>AdminKit Template</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="<?= base_url('assets/static/') ?>css/app.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />


</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="#">
					<span class="align-middle">UTS BPF 22</span>
				</a>

				<ul class="sidebar-nav">


					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('index.php/Pelanggan') ?>">
							<i class="align-middle" data-feather="sliders"></i> <span
								class="align-middle">Pelanggan</span>
						</a>
					</li>
					<li class="sidebar-header">
						Menu
					</li>
					<?php
					if ($user['role'] == 'Admin') { ?>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('Pelanggan/') ?>">
								<i class="align-middle" data-feather="user"></i> <span class="align-middle">Pelanggan</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('pesanan/') ?>">
								<i class="align-middle" data-feather="user"></i> <span class="align-middle">Pesanan</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('DataDiri/') ?>">
								<i class="align-middle" data-feather="user"></i> <span class="align-middle">Data Diri</span>
							</a>
						</li>
					<?php } else { ?>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('Profil/') ?>">
								<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="<?= site_url('Auth/logout') ?>">
								<i class="align-middle" data-feather="user"></i> <span class="align-middle">Logout</span>
							</a>
						</li>
					<?php } ?>

				</ul>

			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">1</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
								aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">1 New Notifications</div>
								<div class="list-group">
									<!-- <a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">
													Restart server 12 to complete the update.
												</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a> -->
									<!-- <a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">
													Aliquam ex eros, imperdiet vulputate hendrerit et.
												</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a> -->
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<!-- <a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">
													Christina accepted your request.
												</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a> -->
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
								data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
								aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">4 New Messages</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="<?= base_url('assets/static/') ?>img/avatars/avatar-5.jpg"
													class="avatar img-fluid rounded-circle" alt="Vanessa Tucker" />
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">
													Nam pretium turpis et arcu. Duis arcu tortor.
												</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="<?= base_url('assets/static/') ?>img/avatars/avatar-2.jpg"
													class="avatar img-fluid rounded-circle" alt="William Harris" />
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">
													Curabitur ligula sapien euismod vitae.
												</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="<?= base_url('assets/static/') ?>img/avatars/avatar-4.jpg"
													class="avatar img-fluid rounded-circle" alt="Christina Mason" />
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">
													Pellentesque auctor neque nec urna.
												</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="<?= base_url('assets/static/') ?>img/avatars/avatar-3.jpg"
													class="avatar img-fluid rounded-circle" alt="Sharon Lessman" />
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">
													Aenean tellus metus, bibendum sed, posuere ac,
													mattis non.
												</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
								data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
								data-bs-toggle="dropdown">
								<img src="<?= base_url('assets/img/Profile/') . $user['gambar'] ?>"
									class="avatar img-fluid rounded me-1" alt="Charles Hall" />
								<span class="text-dark">
									<?= $user['nama'] ?>
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="<?= base_url('index.php/Profil') ?>" ><i class="align-middle me-1"
										data-feather="user"></i>
									Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="pie-chart"></i>
									Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1"
										data-feather="settings"></i>
									Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="help-circle"></i>
									Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('Auth/logout') ?>">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">