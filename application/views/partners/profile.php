<div class="container min-height-80 py-4">
	<div class="row">
		<div class="col-xl-12 mt-4 mb-4">
			<div class="mb-4">
				<h5>Refill Depot Profile</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-8">
							<div class="mb-3">
								<label for="name" class="form-label">Refill Depot Name</label>
								<input type="text" class="form-control" id="name" name="name">
							</div>
							<div class="mb-3">
								<label for="highlight" class="form-label">Highlight</label>
								<input type="highlight" class="form-control" id="highlight" name="highlight">
							</div>
							<div class="mb-3">
								<label for="description" class="form-label">Description / Branding</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="9"></textarea>
							</div>
							<div class="mb-3">
								<label for="name" class="form-label">Refill Service</label>
								<div class="row small">
									<div class="col-auto">
										<div class="btn-service">
											<div class="text-center">
												<img src="<?= base_url() ?>assets/images/icon-refill/mineral-water.svg"
													alt="" width="100px">
											</div>
											<div class="form-check mt-3">
												<input class=" form-check-input" type="checkbox" value=""
													id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault">
													Mineral Water
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Contact Info</label>
								<div class="input-group mb-3">
									<select class="form-select" aria-label="Default select example">
										<option selected>Phone Number</option>
										<option value="1">Telephone</option>
									</select>
									<input type="text" class="form-control" id="phone_number" name="phone_number">
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Pin Location</label>
								<div id="mapid" class="location-profile"></div>
							</div>
							<div class="mb-3">
								<label class="form-label">Detail Address</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
							</div>
							<div class="mt-5">
								<div class="d-grid gap-2">
									<button type="submit" class="btn btn-primary">Save Profile</button>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-center">
							<img src="<?= base_url() ?>assets/images/resource/retail-icon.png" alt=""
								class="profile-avatar">
							<div class="mt-3">
								<button type="submit" class="btn btn-primary">Change Avatar</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {
		getLocation()
	});

	var markLocationIcon = L.icon({
		iconUrl: '<?=base_url()?>assets/images/resource/location-icon.svg',
		iconSize: [40, 40],
	});

	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			alert("Geolocation is not supported by this browser.");
		}
	}
	var cur_lat = null;
	var cur_lng = null;

	function showPosition(position) {
		cur_lat = position.coords.latitude;
		cur_lng = position.coords.longitude;

		var mymap = L.map('mapid').setView([cur_lat, cur_lng], 18);

		L.tileLayer(
			'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
				maxZoom: 20,
				attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
					'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				id: 'mapbox/streets-v11',
				tileSize: 512,
				zoomOffset: -1
			}).addTo(mymap);

		var marker = L.marker([cur_lat, cur_lng], {
			icon: markLocationIcon
		}).addTo(mymap)

		var popup = L.popup();

		function onMapClick(e) {

			mymap.removeLayer(marker);

			marker = L.marker([e.latlng.lat, e.latlng.lng], {
				icon: markLocationIcon
			}).addTo(mymap)
		}

		mymap.on('click', onMapClick);
	}

</script>
