<?php
	$this->load->view("layouts/auth.header.php")
?>
<div class="container">
	<div class="row justify-content-center align-items-center min-height-80 py-5">
		<div class="col-4">
			<div class="text-center">
				<img class="logo-brand-auth" src="<?=base_url();?>assets/images/logo-reffort-cari-depot.svg" alt="">
				<div class="mt-1 mb-5">
					<h4>Reffort</h4>
				</div>

			</div>
			<div class="row mb-5 align-items-end">
				<div class="col">
					<b class="h3">
						Login
					</b>
				</div>
				<div class="col-auto">
					<a href="<?=base_url();?>customers/register" class="btn-link">
						Register
					</a>
				</div>
			</div>
			<div class="mb-5">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>

				<?php 
				if($this->session->flashdata('success') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success');
					echo '</div>';
				}
				?>
				<form method="post" action="<?=base_url()?>customers/auth/login">
					<div class="mb-3">
						<label for="email" class="form-label">Email Address</label>
						<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="d-grid gap-2 mt-5">
						<button type="submit" class="btn btn-primary btn-block">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
	$this->load->view("layouts/auth.footer.php")
?>
