<?php
$this->load->view("layouts/partners.header.php")
?>
<div class="container">
	<div class="row">
		<div class="col-xl-12 mt-4 mb-4">
			<div class="mb-4">
				<h5>Step Completed</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="completed-profile-tab" data-bs-toggle="tab"
								data-bs-target="#completed-profile" type="button" role="tab"
								aria-controls="completed-profile" aria-selected="true">
								<span class="me-2"> <i class="fas fa-circle fa-fw text-primary me-2 fa-xs  "></i> Step 1
									:</span>
								Completed Profile
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="completed-gallery-tab" data-bs-toggle="tab"
								data-bs-target="#completed-gallery" type="button" role="tab"
								aria-controls="completed-gallery" aria-selected="false">
								<span class="me-2"> <i class="fas fa-circle fa-fw text-primary me-2 fa-xs  "></i> Step 2
									:</span>
								Completed Gallery
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="completed-license-tab" data-bs-toggle="tab"
								data-bs-target="#completed-license" type="button" role="tab"
								aria-controls="completed-license" aria-selected="false">
								<span class="me-2"> <i class="fas fa-circle fa-fw text-primary me-2 fa-xs  "></i> Step 3
									:</span>
								Completed License
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="completed-confirm-tab" data-bs-toggle="tab"
								data-bs-target="#completed-confirm" type="button" role="tab"
								aria-controls="completed-confirm" aria-selected="false">
								<span class="me-2"> <i class="fas fa-circle fa-fw text-primary me-2 fa-xs  "></i> Step 4
									:</span>
								Confirmation
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
						<div class="tab-pane fade" id="completed-confirm" role="tabpanel"
							aria-labelledby="completed-confirm-tab">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-sm-6 mt-4 mb-4">
										<p>
											Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime delectus,
											iusto,
											recusandae facere consequuntur tempore suscipit possimus beatae repudiandae
											mollitia
											maiores, commodi dolor quos nobis quia quaerat error tenetur aperiam?
										</p>
										<div class="d-grid gap-2">
											<a href="" class="btn btn-primary btn-block"> Submit & Finish</a>
										</div>
									</div>
								</div>
							</div>
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
