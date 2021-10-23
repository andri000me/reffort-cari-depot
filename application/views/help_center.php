<?php
$this->load->view("layouts/customers.header.php")
?>
<!-- Masthead-->
<header class="masthead">
	<div class="container position-relative">
		<div class="row justify-content-center">
			<div class="col-xl-4">
				<div class="text-center text-white">
					<img src="<?= base_url(); ?>assets/images/resource/cs1.png" alt="" class="image-usephone">
				</div>
			</div>
			<div class="col-xl">
				<div class="text-left text-white h3 pt-5">
					<p>How can we help you?</p>
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Index-->
<div class="container">
	<div class="row py-5">
		<div class="col-4">
			<h5>Customer</h5>
			<ul class="list-group list-group-flush mt-1 mb-3">
				<li class="list-group-item"><a href="#">How to Sign In</a></li>
				<li class="list-group-item"><a href="#">I Can't Find Something</a></li>
				<li class="list-group-item"><a href="#">How to Find Love</a></li>
				<li class="list-group-item"><a href="#">Refill Depot can't Call</a></li>
			</ul>
			<h5>Partners</h5>
			<ul class="list-group list-group-flush mt-1 mb-3">
				<li class="list-group-item"><a href="#">How to Join Us</a></li>
				<li class="list-group-item"><a href="#">Customers Can't Find</a></li>
			</ul>
		</div>


		<div class="col-8">
			<div class="card">
				<div class="card-body">
					<h4>How to sign in</h4>
					<p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
						Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
						took a galley of type and scrambled it to make a type specimen book. It has survived not only
						five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
						passages, and more recently with desktop publishing software like Aldus PageMaker including
						versions of Lorem Ipsum. The standard chunk of Lorem Ipsum used since the 1500s is reproduced
						below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
						Cicero are also reproduced in their exact original form, accompanied by English versions from
						the 1914 translation by H. Rackham.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$this->load->view("layouts/customers.footer.php")
?>
