<?php
$this->load->view("layouts/auth.header.php")
?>
<div class="container">
	<div class="row justify-content-center min-height-80 py-5">
		<div class="col-auto">
			<div class="text-center">
				<img class="logo-brand-auth" src="<?= base_url(); ?>assets/images/logo-reffort-cari-depot.svg" alt="">
				<div class="mt-1 mb-5">
					<h4>Reffort</h4>
				</div>
			</div>
		</div>

		<div class="col"> 
			<div class="mb-5">
				<img class="rounded" src="<?= base_url(); ?>assets/images/resource/partners.png" alt="" width="300px">
			</div> 
		</div>

		<div class="col-lg-4">
			<div class="row mb-5 align-items-end">
				<div class="col">
					<b class="h3">
						Partners
					</b>
				</div>
				<div class="col-auto">
					<a href="<?= base_url() ?>partners/register" class="btn-link">
						Register
					</a>
				</div>
			</div>
			<div class="col">
				<?php
				if ($this->session->flashdata('error') != '') {
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
				<form method="post" action="<?= base_url() ?>partners/auth/login">
					<div class="mb-3">
						<label for="email" class="form-label">Email Address</label>
						<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="d-grid gap-2 mt-5">
						<button type="submit" class="btn btn-primary btn-block">Login Partners</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
	$this->load->view("layouts/auth.footer.php")
	?>