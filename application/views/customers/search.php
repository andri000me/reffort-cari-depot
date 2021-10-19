<?php
	$this->load->view("layouts/customers.header.php")
?>
<div class="container min-height-80 py-4">

	<div class="row align-items-end">
		<div class="col-8 mt-4">
			<b class="h-list">Refill Depot List</b>
			<div class="small text-muted">Result For</div>
		</div>
		<div class="col-4 mt-4">
			<select class="form-select" aria-label="Default select example">
				<option selected>Service Category</option>
				<?php
					foreach($services as $service){ 
				?>
				<option value="1"><?=$service->name?></option>
				<?php } ?>
			</select>
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
				response.data.forEach(item => {
					list_refill_depot += `<div class="col-lg-4 mt-4 mb-2">
						<div class="card">
							<a href="#" class="link-card">
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
									<img src="<?=base_url()?>assets/images/depot/depot-1.jpg" alt="" class="img-depot">
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
