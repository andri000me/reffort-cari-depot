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
		<div class="col-lg-12 mt-4">
			<b class="h-list">Service Category</b>
		</div>
	</div>
	<div class="row">
		<?php
			foreach($services as $service){ 
		?>
		<div class="col-sm-6 col-lg mt-4 mb-2">
			<a href="<?=base_url()?>customers/refill-depot?service=<?=$service->name?>" class="link-card">
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
			<a href="<?=base_url()?>customers/refill-depot" class="btn-link">
				See All
			</a>
		</div>
	</div>
	<div class="row" id="list-refill-depot">

	</div>
</div>

<script>
	$(document).ready(function () {
		getLocation()
	});

	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			alert("Geolocation is not supported by this browser.");
		}
	}

	function showPosition(position) {
		getDataRefillDepot(position.coords.latitude, position.coords.longitude)
	}

	function getDataRefillDepot(lat, lng) {
		$('#list-refill-depot').html();

		var list_refill_depot = "";

		axios.get('<?=base_url()?>api/customers/refill-depot/nearby/' + lat + '/' + lng)
			.then(function (response) {
				if (response.data.length == 0) {

				}
				response.data.forEach(item => {
					list_refill_depot += `<div class="col-lg-4 mt-4 mb-2">
						<div class="card">
							<a href="<?=base_url()?>customers/detail-refill-depot/` + item.id + `" class="link-card">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-auto">
											<img src="<?=base_url()?>` + item.icon + `" alt="" class="icon-depot">
										</div>
										<div class="col">
											<b>` + item.name + `</b>
											<div class="small text-muted">
												` + item.highlight + ` <span class="ms-2 me-2">&#183;</span> ` + getDistanceFromLatLonInKm(lat, lng, item
						.latitude, item.longitude).toFixed(2) + ` Km
											</div>
										</div>
									</div>
								</div>
								<div class="card-body p-0">
									<img src="<?=base_url()?>` + item.thumbnail[0].source + `" alt="" class="img-depot">
								</div>
							</a>
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-auto pe-0">
										<a href="#">
											<i class="fa-heart-like far fa-heart fa-fw fa-lg"></i>
										</a>
									</div>
									<div class="col small text-muted">
										` + (item.total_likes != 0 ? item.total_likes : '') + ` Like
									</div>
								</div>
							</div>
						</div>
					</div>`;
				});
				$('#list-refill-depot').html(list_refill_depot);

				$(".fa-heart-like").hover(
					function () {
						$(this).toggleClass('fas far');;
					},
					function () {
						$(this).toggleClass('far fas');;
					}
				);

			})
			.catch(function (error) {
				// handle error
				console.log(error);
			})
			.then(function () {
				// always executed
			});
	}

	function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
		var R = 6371; // Radius of the earth in km
		var dLat = deg2rad(lat2 - lat1); // deg2rad below
		var dLon = deg2rad(lon2 - lon1);
		var a =
			Math.sin(dLat / 2) * Math.sin(dLat / 2) +
			Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
			Math.sin(dLon / 2) * Math.sin(dLon / 2);
		var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
		var d = R * c; // Distance in km
		return d;
	}

	function deg2rad(deg) {
		return deg * (Math.PI / 180)
	}

</script>

<?php
	$this->load->view("layouts/customers.footer.php")
?>
