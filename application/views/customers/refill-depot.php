<?php
	$this->load->view("layouts/customers.header.php")
?>
<div class="container min-height-80 py-4">

	<div class="row align-items-end">
		<div class="col mt-4">
			<b class="h-list">Refill Depot List</b>
			<?php
				if(!empty($this->input->get('search')))
				{
			?>
			<div class="small text-muted">Result For : <?=$this->input->get('search')?>
			</div>
			<?php
				}
			?>
		</div>
		<div class="col-auto mt-4">
			<div class="row align-items-center">
				<div class="col-auto">
					Service Category
				</div>
				<div class="col">
					<select class="form-select" onchange="filterService()" id="service">
						<option value="">All Service</option>
						<?php
							foreach($services as $service){ 
						?>

						<option value="<?=$service->id?>"
							<?=(!empty($this->input->get('service') && $this->input->get('service') == $service->name) ? 'selected' : '' )?>>
							<?=$service->name?></option>
						<?php } ?>
					</select></div>
			</div>
		</div>
	</div>
	<div class="row" id="list-refill-depot">

	</div>
	<div class="row justify-content-center d-none" id="search-empty">
		<div class="col-lg-4 text-center mt-5 mb-5">
			<img src="<?=base_url()?>assets/images/resource/search-empty.svg" alt="" class="img-search-empty">
			<p class="text-mmuted mt-3">
				We cannot find what do you mean ?
			</p>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12 py-4 text-center">
			<ul class="pagination justify-content-center" id="pagination">
			</ul>
		</div>
	</div>
</div>

<script>
	var page = 0;
	var service = $("#service").val();
	var search = $("#search").val();

	var lat = 0;
	var lng = 0;

	$(document).ready(function () {
		getLocation()

	});
	function filterService(){
		page = 0;
		getDataRefillDepot()
	}

	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			alert("Geolocation is not supported by this browser.");
		}
	}

	function showPosition(position) {
		lat = position.coords.latitude
		lng = position.coords.longitude
		getDataRefillDepot()
	}

	function loadingAnimation() {
		$('#list-refill-depot').html();
	}

	function getDataRefillDepot() {
		loadingAnimation();

		window.scrollTo(0, 0);

		var list_refill_depot = "";
		
		service = $("#service").val();
		search = $("#search").val();

		axios.get('<?=base_url()?>api/customers/refill-depot?search=' + search + '&service=' + service + '&page=' + page)
			.then(function (response) {
				if (response.data.data.length == 0) {
					$("#search-empty").removeClass('d-none')

				}
				response.data.data.forEach(item => {
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

				var list_page = '';
				var total_pages = response.data.pagination.total_row;

				for (i = 0; i < total_pages; i++) {
					list_page += `
					<li class="page-item ` + (page == i ? 'active' : '') + `">
						<a class="page-link" onclick="new_list('` + i + `')">
							` + (i + 1) + `
						</a>
					</li>`;
				}

				$('#pagination').html(`
				<li class="page-item ` + (page == 0 ? 'disabled' : '') + `">
					<a class="page-link" href="#" onclick="prev_list()">
						<i class="fas fa-chevron-left fa-fw"></i>
					</a>
				</li>
				` + list_page + `
				<li class="page-item ` + (page == (total_pages - 1) ? 'disabled' : '') + `">
					<a class="page-link" href="#" onclick="next_list()">
						<i class="fas fa-chevron-right fa-fw"></i>
					</a>
				</li>`);

			})
			.catch(function (error) {
				// handle error
				console.log(error);
			})
			.then(function () {
				// always executed
			});
	}

	function new_list(new_page) {
		page = new_page
		getDataRefillDepot()
	}

	function prev_list() {
		page = page - 1;
		getDataRefillDepot()
	}

	function next_list() {
		page = page + 1;
		getDataRefillDepot()
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
