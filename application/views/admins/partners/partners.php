<?php
	$this->load->view("layouts/admin.header.php")
?>
<div class="container min-height-80">
	<div class="row">
		<div class="col-xl-12 mt-4 mb-4">
			<div class="mb-4">
				<a href="<?=base_url()?>admins/partners/add" class="float-end btn btn-success">
					Add New
				</a>
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
								<th>Action</th>
							</tr>
						</thead>
						<tbody class="text-muted">
							<?php
							$no = 1;
							foreach($partners as $partner){
								
							?>
							<tr>
								<td>
									<?=$no?>
								</td>
								<td>
									<?=$partner->name?>
								</td>
								<td class="text-center">
									<?=$partner->total_services?>
								</td>
								<td class="text-center">
									<?=$partner->created_at?>
								</td>
								<td>
									<a href="<?=base_url()?>admins/partners/detail?id=<?=$partner->id?>" class="btn btn-info me-1 text-white">
										Detail
									</a>
									<a href="<?=base_url()?>admins/partners/detail?id=<?=$partner->id?>" class="btn btn-primary me-1 text-white">
										Update
									</a>
									<a href="<?=base_url()?>admins/partners/detail?id=<?=$partner->id?>" onclick="return confirm('Are you sure to delete ?')" class="btn btn-danger me-1 text-white">
										Delete
									</a>
								</td>
							</tr>
							<?php
							$no++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {
		// $('#table').DataTable();
	});

</script>
<?php
$this->load->view("layouts/admin.footer.php")
?>
