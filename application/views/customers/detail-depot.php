<?php
$this->load->view("layouts/customers.header.php")
?>
<div class="container min-height-80">
	<?php
		foreach($partners as $partner){ 

			$maps_location = $partner->latitude.", ".$partner->longitude;
	?>
	<div class="row">
		<div class="col-xl-12 mt-4 mb-4">
			<div class="card">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-auto">
							<img src="<?= base_url().$partner->icon ?>" alt="" width="52px">
						</div>
						<div class="col-auto">
							<b><?=$partner->name?></b>
							<div class="small text-muted"><?=$partner->highlight?></div>
						</div>
						<div class="col">
							<div class="row  justify-content-end">
								<div class="col-auto ps-4">
									<i class="fas fa-store fa-fw me-2 text-muted"></i>
									<span class="small text-muted"><?=count($partner_services)?> Services</span>
								</div>
								<div class="col-auto ps-4">
									<i class="fas fa-user-check fa-fw me-2 text-muted"></i>
									<?php
										foreach($partner_licenses as $license){	
									?>
									<span class="small text-muted
										text-capitalize"><?=($license->status == "approved" ? "Verified" : $license->status) ?>
									</span>
									<?php } ?>
								</div>
								<div class="col-auto ps-4">
									<i class="fas fa-map-marked-alt fa-fw me-2 text-muted"></i>
									<span class="small text-muted" id="distance-location"></span>
								</div>
								<div class="col-auto ps-4">
									<i class="fas fa-heart fa-fw me-2 text-muted"></i>
									<?php
										foreach($partner_likes as $like){	
									?>
									<span class="small text-muted"><?=$like->total_like?> Likes</span>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12 mb-4">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6 pe-4 mb-4">
							<?php

									foreach($partner_gallerys as $index=>$gallery){
										if($gallery->type == "foto"){
								?>
							<img src="<?= base_url().$gallery->source ?>" alt=""
								class="img-refill-depot <?=$index==0 ? '' : 'd-none'?>" id="gallery-<?=$gallery->id?>">
							<?php
										}else{
											?>
											<iframe class="img-refill-depot <?=$index==0 ? '' : 'd-none'?>" src="<?=$gallery->source?>"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen id="gallery-<?=$gallery->id?>"></iframe>
							<?php
										}
									} 
								?>

							<div class="row mb-2 justify-content-center">
								<?php
									foreach($partner_gallerys as $index=>$gallery){
										if($gallery->type == "foto"){
								?>
								<div class="col-auto p-1">
									<img src="<?= base_url().$gallery->source ?>" alt=""
										id="btn-gallery-<?=$gallery->id?>"
										class="img-refill-depot-detail <?=$index==0 ? 'active' : ''?>"
										onclick="showThisGallery('#btn-gallery-<?=$gallery->id?>','#gallery-<?=$gallery->id?>')">
								</div>
								<?php 
										}else{
											?>
								<div class="col-auto p-1">
									<img src="<?= base_url() ?>assets/images/resource/video-play.svg" alt=""
										id="btn-gallery-<?=$gallery->id?>"
										class="img-refill-depot-detail <?=$index==0 ? 'active' : ''?>"
										onclick="showThisGallery('#btn-gallery-<?=$gallery->id?>','#gallery-<?=$gallery->id?>')">
								</div>
								<?php
										}
									} 
								?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
								<div class="col">
									<h4><?=$partner->name?></h4>
								</div>
								<div class="col-auto">
									<i class="fas fa-share-alt"></i>
								</div>
							</div>
							<?php
								if(count($partner_schedules_today) == 0){
							?>
							<div class="small mb-4 text-danger">Closed Today</div>
							<?php
								}

								foreach($partner_schedules_today as $schedule){
							?>
							<div class="small text-muted mb-4"> 
								<?=$schedule->day?> 
								<span class="ms-2 me-2">&#183;</span> 
								Open at
								<?=date_format(date_create($schedule->open_time),'H:i')?> -
								<?=date_format(date_create($schedule->close_time),'H:i')?>
							</div>
							<?php } ?>
							<div class="">
								<p class="text-word-wrap text-muted">
									<?=$partner->description?>
								</p>
							</div>

							<div class="py-4">
								<b>Refil Service</b>
								<?php
									foreach($partner_services as $service){
								?>
								<div class="row mt-2 text-muted align-items-center">
									<div class="col-auto pt-2 pb-2">
										<img src="<?= base_url().$service->icon ?>" alt="" width="32px">
									</div>
									<div class="col">
										<?=$service->name?> <span class="ms-2 me-2">&#183;</span>
										<?php
											if($service->status == 'ready in stock'){
										?>
										<span class="text-success"><?=$service->status?></span>
										<?php
											}
										?>
										<?php
											if($service->status == 'limited stock'){
										?>
										<span class="text-warning"><?=$service->status?></span>
										<?php
											}
										?>
										<?php
											if($service->status == 'out of stock'){
										?>
										<span class="text-danger"><?=$service->status?></span>
										<?php
											}
										?>

									</div>
								</div>
								<?php } ?>
							</div>

							<div class="py-4">
								<b>Contact Info</b>
								<?php
									foreach($partner_contacts as $contact){
								?>
								<div class="mt-2">
									<a href="<?=$contact->action.$contact->contact?>" class="btn btn-primary btn-contact ">
										<div class="row">
											<div class="col-auto">
												<i class="<?=$contact->icon?> fa-fw"></i>
											</div>
											<div class="col-auto">
												<?=$contact->type?> :
											</div>
											<div class="col text-end">
												<?=$contact->contact?>
											</div>
										</div>
									</a>
								</div>
								<?php
									}
								?>
							</div>

							<div class="py-4">
								<b>Location</b>
								<div class="mt-4">
									<div id="mapid" class="location-refill-depot"></div>
								</div>
								<div class="text-muted small mt-2">
									<p>
										<?=$partner->address?>
									</p>
								</div>
							</div>

							<div class="py-4">
								<b>Schedule</b>
								<div class="mt-2">
									<table class="table text-muted small">
										<thead class="bg-light">
											<tr>
												<th scope="col">Days</th>
												<th scope="col">Open Time</th>
												<th scope="col">Close Time</th>
											</tr>
										</thead>
										<tbody>
											<?php
												foreach($partner_schedules as $schedule)
												{
													?>
											<tr>
												<th scope="row">
													<?=$schedule->day?>
												</th>
												<td>
													<?=$schedule->open_time?>
												</td>
												<td>
													<?=$schedule->close_time?>
												</td>
											</tr>

											<?php
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<?php
	} 
	?>
</div>
<script>
	$(document).ready(function () {
		getLocation()
	});

	function showThisGallery(btn_id, gallery_id) {
		$('.img-refill-depot').addClass('d-none')
		$('.img-refill-depot-detail').removeClass('active')
		$(btn_id).addClass('active')
		$(gallery_id).removeClass('d-none')
	}
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
		cur_lng=  position.coords.longitude; 
		$("#distance-location").html(getDistanceFromLatLonInKm(cur_lat, cur_lng, <?=$partner->latitude?>, <?=$partner->longitude?>).toFixed(2)+" Km")
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


	var parkingLocationIcon = L.icon({
		iconUrl: '<?=base_url()?>assets/images/resource/location-icon.svg',
		iconSize: [40, 40],
	});
 

	var mymap = L.map('mapid').setView([<?=$maps_location?>], 15);

	L.tileLayer(
		'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11',
			tileSize: 512,
			zoomOffset: -1
		}).addTo(mymap);


	L.marker([<?=$maps_location?>], {
		icon: parkingLocationIcon
	}).addTo(mymap)

</script>
<?php
$this->load->view("layouts/customers.footer.php")
?>
