<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.css') ?>">
	<!-- datatables -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.css') ?>">
	<!-- Google Font: Source Sans Pro -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>

<!-- <body class="hold-transition sidebar-mini"> -->
<body class="sidebar-mini control-sidebar-slide-open text-sm">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
					</a>
				</li>

				<!-- Notifications Dropdown Menu -->
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
						<i class="fas fa-sign-out-alt"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-maroon elevation-4">
			<!-- Brand Logo -->
			<a href="../../index3.html" class="brand-link text-center">
				<!-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
				<span class="brand-text text-center font-weight-light">PT. NGS</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional)
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Alexander Pierce</a>
					</div>
				</div> -->

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
						<li class="nav-item">
				            <a href="<?= base_url() ?>" class="nav-link active">
							<i class="nav-icon fas fa-tachometer-alt"></i>
				              <p>
				                Dashboard
				              </p>
				            </a>
				         </li>
						<li class="nav-item">
				            <a href="<?= base_url('members') ?>" class="nav-link">
							<i class="nav-icon fas fa-users"></i>
				              <p>
				                Members
				              </p>
				            </a>
				         </li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview ">
								<li class="nav-item">
									<a href="../../index.html" class="nav-link navbar-dark">
										<i class="far fa-circle nav-icon"></i>
										<p>Dashboard v1</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../../index2.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Dashboard v2</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../../index3.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Dashboard v3</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Blank Page</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Blank Page</li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<section class="content">
				<?php
				/*
			* Variabel $contentnya diambil dari libraries template.php
			* (application/libraries/template.php)
			* */
				echo $contentnya; ?>
			</section>

		</div>
</body>

<?php
/*
	 * Variabel $footernya diambil dari libraries template.php
	 * (application/libraries/template.php)
	 * */
echo $footernya; ?>