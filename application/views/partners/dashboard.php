<?php
$this->load->view("layouts/partners.header.php")
?>
<div class="container min-height-80 py-4">
	<div class="row">
		<div class="col-xl-12 mt-4 mb-4">

		</div>
	</div>
	<div class="row">
		<div class="col-xl-12 mt-4 mb-4">
			<div class="alert alert-danger" role="alert">
				Upload your license right away, so your refill depot can be seen on reffort!
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12 mt-4">
			<h5>Service Daily Stock</h5>
		</div>
		<div class=" col-auto mt-4 mb-4">
			<div class="card">
				<div class="card-body">
					<div class="text-center">
						<img src="<?= base_url() ?>assets/images/icon-refill/mineral-water.svg" alt="" width="150px">
						<p class="mt-3">Mineral Water</p>
					</div>
					<div class="small">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="service-1" id="service-1-ready">
							<label class="form-check-label" for="service-1-ready">
								Ready In Stock
								<i class="fas fa-check-circle fa-fw text-success"></i>
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="service-1" id="service-1-ready">
							<label class="form-check-label text-muted" for="service-1-ready">
								Low Stock
								<i class="fas fa-exclamation-circle fa-fw text-warning"></i>
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="service-1" id="service-1-ready">
							<label class="form-check-label text-muted" for="service-1-ready">
								Out Of Stock
								<i class="fas fa-exclamation-circle fa-fw text-danger"></i>
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="service-1" id="service-1-ready">
							<label class="form-check-label text-muted" for="service-1-ready">
								Not Available
								<i class="fas fa-times-circle fa-fw text-secondary"></i>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-6 mt-4 mb-4">
			<div class="mb-4">
				<h5>Schedule Refill Depot</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<table class="table text-muted small">
						<thead class="bg-light">
							<tr>
								<th scope="col">Days</th>
								<th scope="col">Open Time</th>
								<th scope="col">Close Time</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td>
									<input type="time" class="form-control input-time" value="08:00">
								</td>
								<td>
									<input type="time" class="form-control input-time" value="08:00">
								</td>
							</tr>
						</tbody>
					</table>
					<button class="btn btn-primary mt-2">Save Schedule</button>
				</div>
			</div>
		</div>
		<div class="col-xl-6 mt-4 mb-4">
			<div class="mb-4">
				<h5>License</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<a href="<?=base_url()?>partners/upload-license" class="btn btn-primary">Upload License</a>

					<table class="mb-4">
						<tr>
							<td>Registed</td>
							<td class="ps-3 pe-1">:</td>
							<td class="text-muted">20 January 2021</td>
						</tr>
						<tr>
							<td>Expired</td>
							<td class="ps-3 pe-1">:</td>
							<td class="text-muted">20 January 2021</td>
						</tr>
					</table>

					<img src="https://sites.google.com/site/inosaplikasi/_/rsrc/1477662427080/pembuat/siup/SIUP.JPG"
						alt="" width="100%">
				</div>
			</div>
		</div>
	</div>
</div>
<?php
$this->load->view("layouts/partners.footer.php")
?>
