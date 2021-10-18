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
	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-sm">
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
				<form class="d-flex mx-auto">
					<div class="input-group form-nav-search">
						<input class="form-control" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-primary" type="submit">
							<i class="fas fa-search fa-fw   "></i>
						</button>
					</div>
				</form>
				<ul class="navbar-nav ms-auto mb-2 mb-md-0">
					<?php
						if(empty($this->session->userdata('id'))){
						
					?>
					<li class="nav-item">
						<a class="nav-link ms-2 me-2 <?=$uri_1 == '' ? 'active' : ''?>" href="<?=base_url()?>">Home</a>
					</li>
					<li class="nav-item">
<<<<<<< HEAD
						<a class="nav-link ms-2 me-2" aria-current="page" href="<?=base_url()?>">Join Us Partner</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ms-2 me-2 <?=$uri_1 == 'help-center' ? 'active' : ''?>"
							href="<?=base_url()?>help-center">Help Center</a>
					</li>
					<li class="nav-item ms-2">
						<a href="<?=base_url()?>customers/login" class="btn btn-outline-primary me-2">Login</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url()?>customers/register" class="btn btn-primary">Sign-up</a>
					</li>
					<?php
						}else{
					?>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-user-circle fa-fw fa-lg me-2"></i> <?=$this->session->userdata('name')?>
						</a>
						<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">
									<i class="fas fa-sign-out-alt fa-fw"></i> Logout
								</a>
							</li>
						</ul>
=======
						<a class="nav-link ms-2 me-2 <?=$uri_1 == '' ? 'active' : ''?>" href="<?=base_url()?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ms-2 me-2" aria-current="page" href="<?=base_url()?>">Join Us Partner</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ms-2 me-2 <?=$uri_1 == 'help-center' ? 'active' : ''?>"
							href="<?=base_url()?>help-center">Help Center</a>
					</li>
					<li class="nav-item ms-2">
						<a href="<?=base_url()?>customers/login" class="btn btn-outline-primary me-2">Login</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url()?>customers/register" class="btn btn-primary">Sign-up</a>
>>>>>>> d9785c08694f7459695e0fd18afe15ff74707f79
					</li>
					<?php
						}
					?>
				</ul>
			</div>
		</div>
	</nav>
