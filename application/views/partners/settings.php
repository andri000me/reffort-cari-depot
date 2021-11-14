<?php
$this->load->view("layouts/partners.header.php")
?>
<div class="container">
	<div class="row">
		<div class="col-xl-6 mt-4 mb-4">
			<div class="mb-4">
				<h5>Settings</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="completed-profile-tab" data-bs-toggle="tab"
								data-bs-target="#completed-profile" type="button" role="tab"
								aria-controls="completed-profile" aria-selected="true">

								Profile
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="completed-gallery-tab" data-bs-toggle="tab"
								data-bs-target="#completed-gallery" type="button" role="tab"
								aria-controls="completed-gallery" aria-selected="false">
								Gallery
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="completed-license-tab" data-bs-toggle="tab"
								data-bs-target="#completed-license" type="button" role="tab"
								aria-controls="completed-license" aria-selected="false">
								License
							</button>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="completed-profile" role="tabpanel"
							aria-labelledby="completed-profile-tab">
							<?php
								$this->load->view("partners/profile.php");
							?>
						</div>
						<div class="tab-pane fade" id="completed-gallery" role="tabpanel"
							aria-labelledby="completed-gallery-tab">
							<?php
								$this->load->view("partners/gallery.php");
							?>

						</div>
						<div class="tab-pane fade" id="completed-license" role="tabpanel"
							aria-labelledby="completed-license-tab">
							<?php
								$this->load->view("partners/upload_license.php");
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<?php
$this->load->view("layouts/partners.footer.php")
?>
