<?php
	$this->load->view("layouts/customers.header.php")
?>
<div class="container min-height-80 py-4">
	<div class="row">
		<?php
		foreach($banners as $banner){ 
		?>
		<div class="col py-4">
			<div class="card">
				<div class="card-body p-0">
					<img src="<?=base_url().$banner->source?>" alt="banner" class="img-banners">
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="row">
		<div class="col-xl-12 mt-4">
			<b class="h-list">Service Category</b>
		</div>
	</div>
	<div class="row">
		<?php
			foreach($services as $service){ 
		?>
		<div class="col-sm-6 col-xl py-4">
			<a href="#" class="link-card">
				<div class="card">
					<div class="card-body text-center">
						<img src="<?=base_url().$service->icon?>" alt="" class="icon-services">
						<p class="mb-0 mt-3 text-services">
							<?=$service->name?>
						</p>
					</div>
				</div>
			</a>
		</div>
		<?php } ?>
	</div>
	<div class="row align-items-end">
		<div class="col mt-4">
			<b class="h-list">Nearby Refill Depot</b>
		</div>
		<div class="col-auto">
			<a href="#" class="btn-link">
				See All
			</a>
		</div>
	</div>
	<div class="row" id="list-refill-depot">

	</div>
</div>

<script>
	$(document).ready(function () {
		getDataRefillDepot()

	});

	function getDataRefillDepot() {
		$('#list-refill-depot').html();

		var list_refill_depot = "";

		axios.get('<?=base_url()?>api/customers/refill-depot/nearby/-6.18641700/106.86312500')
			.then(function (response) {
				response.data.forEach(item => {
					list_refill_depot += `<div class="col-xl-4 py-4">
						<div class="card">
							<a href="#" class="link-card">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-auto">
											<img src="<?=base_url()?>assets/images/resource/retail-icon.png" alt="" class="icon-depot">
										</div>
										<div class="col">
											<b>Nama Depot</b>
											<div class="small text-muted">
												Highlight <span class="ms-2 me-2">&#183;</span> 0.3 Km
											</div>
										</div>
									</div>
								</div>
								<div class="card-body p-0">
									<img src="<?=base_url()?>assets/images/depot/depot-1.jpg" alt="" class="img-depot">
								</div>
							</a>
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-auto pe-0">
										<a href="#">
											<i class="fas fa-heart fa-fw fa-lg"></i>
										</a>
									</div>
									<div class="col small text-muted">
										100 Like
									</div>
								</div>
							</div>
						</div>
					</div>`;
				});
				$('#list-refill-depot').html(list_refill_depot);
			})
			.catch(function (error) {
				// handle error
				console.log(error);
			})
			.then(function () {
				// always executed
			});
	}

</script>

<?php
	$this->load->view("layouts/customers.footer.php")
?>
