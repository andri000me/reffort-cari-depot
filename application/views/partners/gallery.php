<div class="container">
	<div class="row">
		<div class="col-xl-6 mt-4 mb-4">
			<div class="mb-4">
				<h5>Post Foto</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<label for="name" class="form-label">Foto</label>
						<input type="file" class="form-control" id="name" name="name">
					</div>
					<div class="d-grid gap-2 col-4 mx-auto">
						<button class="btn btn-primary me-md-2" type="button">Upload</button>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-6 mt-4 mb-4">
			<div class="mb-4">
				<h5>Post Video</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<label for="name" class="form-label">Embed Link Youtube Video</label>
						<input type="text" class="form-control" id="video" name="video" placeholder="https://">
					</div>
					<div class="d-grid gap-2 col-4 mx-auto">
						<button class="btn btn-primary me-md-2" type="button">Upload</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-12 mt-4 mb-4">
			<div class="mb-4">
				<h5>Gallerys</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<?php
                        for($i=0; $i<5; $i++){ 
                        ?>
						<div class="col-sm-4 mb-4">
							<img class="image-gallery"
								src="https://1.bp.blogspot.com/-0DCCmUMLZ5M/XtfKfc92ZcI/AAAAAAAACkQ/JPX4WL4l2WYZbQwMlwjLNciWNZpnOI8zQCLcBGAsYHQ/w1200-h630-p-k-no-nu/Depot%2BAir%2BMinum%2BIsi%2BUlang.jpg"
								alt="">
							<div class="text-center mt-3">
								<button class="btn btn-sm btn-danger">
									<i class="fas fa-trash fa-fw"></i>
								</button>
							</div>
						</div>
						<?php
                        }
                        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
