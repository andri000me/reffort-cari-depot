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
                        Register
                    </b>
                </div>
                <div class="col-auto">
                    <a href="<?=base_url();?>customers/login" class="btn-link">
                        Login
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
                <form action="<?=base_url()?>customers/auth/register" method="post">
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number">
                    </div>
                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
	$this->load->view("layouts/auth.footer.php")
?>