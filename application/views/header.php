<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Project Sista</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>public/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="<?php echo base_url()?>public/low size.png" width="100pt" height="100pt" class="rounded mx-auto d-block" alt=""></div>
      <div class="list-group list-group-flush">
        <a href="<?=base_url()?>index.php/dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?=base_url()?>index.php/seminar_ta" class="list-group-item list-group-item-action bg-light">Data Seminar</a>
        <a href="<?=base_url()?>index.php/peserta" class="list-group-item list-group-item-action bg-light">Peserta</a>
        <a href="<?=base_url()?>index.php/dosen" class="list-group-item list-group-item-action bg-light">Dosen</a>
        <a href="<?=base_url()?>index.php/detail_penilaian" class="list-group-item list-group-item-action bg-light">Data Detail Nilai</a>
        <a href="<?=base_url()?>index.php/Penilaian" class="list-group-item list-group-item-action bg-light">Data Penilaian</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" >

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login/ceklogin')?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login/logout')?>">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">