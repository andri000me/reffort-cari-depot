<?php
	$this->load->view("layouts/admin.header.php")
?>
<div class="container min-height-80">
	<div class="row">
		<div class="col-xl-12 mt-4 mb-4">
			<div class="mb-4">
				<h5>Partners</h5>
			</div>
			<div class="card">
				<div class="card-body">
					<table class="table" id="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Depot Name</th>
								<th class="text-center">Total Service</th>
								<th class="text-center">Joined At</th>
								<th class="text-center">Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>XXXXX</td>
								<td class="text-center">0</td>
								<td class="text-center">04 Agustust 2021, 11:00 Am</td>
								<td class="text-center">
									<span>Approved</span>
								</td>
								<td>
									<a href="#" class="btn btn-info me-1 text-white">
										Detail
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {
		$('#table').DataTable();
	});

</script>
<?php
$this->load->view("layouts/admin.footer.php")
?>
