<?php
$this->load->view("layouts/admin.header.php")
?>
<div class="container min-height-80 py-4">
	<div class="row">
		<div class="col-xl-12 mt-4 mb-4">
			<div class="mb-4">
				<h5>Add Partners</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<form action="<?=base_url()?>admins/partners/save/add" method="POST" enctype="multipart/form-data">
						<div class="mb-3">
							<label for="name" class="form-label">Refill Depot Name</label>
							<input type="text" class="form-control" id="name" name="name"
								value="">
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Foto Depot Name</label>
							<input type="file" class="form-control" name='thumbnail' />
						</div>
						<div class="mb-3">
							<label for="highlight" class="form-label">Highlight</label>
							<input type="highlight" class="form-control" id="highlight" name="highlight"
								value="">
						</div>
						<div class="mb-3">
							<label for="description" class="form-label">Description / Branding</label>
							<textarea class="form-control" id="description" name="description"
								rows="9"></textarea>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Refill Service</label>
							<div class="row small">
								<?php
								foreach($services as $service){ 
									
								?>
								<div class="col-auto p-1">
									<label for="service-<?=$service->id?>" id="label-service-<?=$service->id?>"
										class="text-center btn-service h-100"
										onclick="changeActive('#service-<?=$service->id?>', '#label-service-<?=$service->id?>')">
										<img src="<?= base_url().$service->icon ?>" alt="" width="100px">
										<div class="mt-3">
											<?=$service->name?>
										</div>
										<input class="d-none" type="checkbox" value="<?=$service->id?>"
											id="service-<?=$service->id?>">
									</label>
								</div>
								<?php
								}
							?>
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label mt-3 mb-3">Contact Info</label>
							<?php
							foreach($contacts as $contact){ 
						?>
							<div class="input-group mb-3 mt-3">
								<span class="input-group-text label-contact" id="inputGroup-sizing-default">
									<i class="<?=$contact->icon?> me-2"></i>
									<?=$contact->type?>
								</span>
								<input type="text" class="form-control" name="contact[<?=$contact->type?>]">
							</div>
							<?php
							}
						?>
						</div>
						<div class="mb-3">
							<label class="form-label mt-3 mb-3">Pin Location</label>
							<div id="mapid" class="location-profile"></div>
							<input type="text" name="latitude" id="latitude" value="">
							<input type="text" name="longitude" id="longitude"
								value="">
						</div>
						<div class="mb-3">
							<label class="form-label">Detail Address</label>
							<textarea class="form-control" name="address"
								rows="2"></textarea>
						</div>
						<div class="mt-5">
							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-primary">Save Profile</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {
		getLocation()
	});

	function changeActive(input, label) {

		var checked = $(input).is(":checked")
		if (checked) {
			$(label).addClass("active")
		} else {
			$(label).removeClass("active")
		}
	}
	var markLocationIcon = L.icon({
		iconUrl: '<?=base_url()?>assets/images/resource/location-icon.svg',
		iconSize: [60, 60],
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

	var before_lat = $("#latitude").val();
	var before_lng = $("#longitude").val();

	function showPosition(position) {
		cur_lat = (before_lat == "") ? position.coords.latitude : before_lat;
		cur_lng = (before_lng == "") ? position.coords.longitude : before_lng;

		$("#latitude").val(cur_lat);
		$("#longitude").val(cur_lng);

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

			$("#latitude").val(e.latlng.lat)
			$("#longitude").val(e.latlng.lng)
		}

		mymap.on('click', onMapClick);
	}

</script>
<?php
$this->load->view("layouts/admin.footer.php")
?>