<main class="d-flex w-100">
	<div class="container d-flex flex-column">
		<div class="row vh-100">
			<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4">
						<h1 class="h2">Register Your Account</h1>

					</div>

					<div class="card">
						<div class="card-body">
							<div class="m-sm-3">
								<form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
									<div class="mb-3">
										<label class="form-label">Full name</label>
										<input class="form-control form-control-lg" value="<?= set_value('nama'); ?>" type="text" name="nama"
											placeholder="Enter your name" />
											<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="mb-3">
										<label class="form-label">Email</label>
										<input class="form-control form-control-lg" value="<?= set_value('email'); ?>" type="email" name="email"
											placeholder="Enter your email" />
											<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="mb-3">
										<label class="form-label">Password</label>
										<input class="form-control form-control-lg" value="<?= set_value('password1'); ?>" type="password" name="password1"
											placeholder="Enter password" />
											<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="mb-3">
										<label class="form-label">Confirm Password</label>
										<input class="form-control form-control-lg" value="<?= set_value('password2'); ?>" type="password" name="password2"
											placeholder="Enter password" />
											<?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="d-grid gap-2 mt-3">
										<button type="submit" class="btn btn-lg btn-primary">Sign up</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="text-center mb-3">
						Already have account? <a href="<?= base_url('auth/index') ?>">Log In</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>