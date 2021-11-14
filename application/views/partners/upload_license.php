<div class="container min-height-80 py-4">
	<div class="row">
		<div class="col-xl-6 mt-4 mb-4">
			<div class="mb-4">
				<h5>Upload License</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="text-right">
						<from method="post" action="<? base_url() ?>ustomers/auth/login">
							<div class="mb-3">
								<label for="file" class="form-label">Upload License</label>
								<input class="form-control" type="file" id="file">
							</div>
							<div class="mb-3">
								<label for="start_date" class="form-label">Registered Date</label>
								<input type="date" class="form-control" id="start_date" name="start_date">
							</div>
							<div class="mb-3">
								<label for="end_date" class="form-label">Expired Date</label>
								<input type="date" class="form-control" id="end_date" name="end_date">
							</div>
							<div class="mt-4">
								<div class="d-grid gap-2">
									<button type="submit" class="btn btn-primary btn-block">Submit & Verifikasi</button>
								</div>
							</div>
						</from>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 mt-4 mb-4">
			<div class="mb-4">
				<h5>Preview License</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<img src="<?= base_url() ?>assets/images/license/license-sample.svg" alt="" width="600px">
				</div>
			</div>
		</div>
	</div>
</div>
