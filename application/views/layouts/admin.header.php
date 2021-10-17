<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Reffort - Cari Refill Depot</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/images/favicon.svg" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
		type="text/css" />
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
		type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet" />

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<?php
$uri_1 = $this->uri->segment(1);

?>

<body>
	<!-- Navigation-->
	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
		<div class="container" style="vertical-align:middle">
			<a class="navbar-brand align-self-center" href="<?=base_url()?>">
				<img class="logo-brand" src="<?=base_url()?>assets/images/logo-reffort-cari-depot.svg" alt="">
				<span class="logo-name">Reffort</span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
				aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item">
						<a class="nav-link ms-2 me-2 <?=$uri_1 == 'help-center' ? 'active' : ''?>"
							href="<?=base_url()?>help-center">
							Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ms-2 me-2 <?=$uri_1 == 'help-center' ? 'active' : ''?>"
							href="<?=base_url()?>help-center">
							Partners
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ms-2 me-2 <?=$uri_1 == 'help-center' ? 'active' : ''?>"
							href="<?=base_url()?>help-center">
							Users
						</a>
					</li>
					<li class="nav-item ms-2">
						<a href="<?=base_url()?>customers/login" class="btn btn-outline-danger me-2">
							Logout
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
