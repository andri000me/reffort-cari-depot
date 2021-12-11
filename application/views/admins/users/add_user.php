<?php
	$this->load->view("layouts/admin.header.php")
?>
<div class="container min-height-80">
	<div class="row">
		<div class="col mt-4 mb-4">
			<a href="#" class="card-dashboard-link">
				<div class="card bg-warning text-white">
					<div class="card-body h-100">
						<p class="small">Registered Partners</p>
						<div class="float-end icon-dashboard">
							<i class="fas fa-user-plus"></i>
						</div>
						<h3>80</h3>
					</div>
				</div>
			</a>
		</div>
		<div class="col mt-4 mb-4">
			<a href="#" class="card-dashboard-link">
				<div class="card bg-primary text-white">
					<div class="card-body h-100">
						<p class="small">Uploaded License</p>
						<div class="float-end icon-dashboard">
							<i class="fas fa-user-shield"></i>
						</div>
						<h3>80</h3>
					</div>
				</div>
			</a>
		</div>
		<div class="col mt-4 mb-4">
			<a href="#" class="card-dashboard-link">
				<div class="card bg-success text-white">
					<div class="card-body h-100">
						<p class="small">Acived Partners</p>
						<div class="float-end icon-dashboard">
							<i class="fas fa-user-check"></i>
						</div>
						<h3>80</h3>
					</div>
				</div>
			</a>
		</div>
		<div class="col mt-4 mb-4">
			<a href="#" class="card-dashboard-link">
				<div class="card bg-danger text-white">
					<div class="card-body h-100">
						<p class="small">Rejected Partners</p>
						<div class="float-end icon-dashboard">
							<i class="fas fa-user-times"></i>
						</div>
						<h3>80</h3>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12 mt-4 mb-4">
			<div class="mb-4">
				<h5>New Notification</h5>
			</div>
			<div class="card">
				<div class="card-body">

					<div class="alert alert-warning alert-dismissible fade show mb-0 text-dark" role="alert">
						<div class="row">
							<div class="col-auto pe-2">
								<i class="fas fa-user-plus fa-fw   "></i>
							</div>
							<div class="col">
								<strong>New Partner Joined!</strong>
								<span class="ms-2 me-2">&#183;</span>
								<small class="text-muted">20 Juni 2020, 20:00</small>
								<p class="mt-2 mb-0"> Ujang water baru saja mendaftar.</p>
							</div>
						</div>
						<button type="button" class="btn-close btn-sm" data-bs-dismiss="alert"
							aria-label="Close"></button>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php
$this->load->view("layouts/admin.footer.php")
?>
