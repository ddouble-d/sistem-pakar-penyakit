<!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistem Pakar Penyakit Umum</title>
  <!-- Favicon -->
  <link href="<?=base_url()?>bootstrap/medical.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="<?=base_url()?>bootstrap/argon-design-system-master/assets/css/fonts.css" rel="stylesheet">
  <!-- Icons -->
  <link href="<?=base_url()?>bootstrap/argon-design-system-master/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?=base_url()?>bootstrap/argon-design-system-master/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- DataTables -->
  <!-- <link href="< ?=base_url()?>bootstrap/DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" /> -->
  <!-- SweetAlert2 -->
  <link href="<?=base_url()?>bootstrap/sweetalert2-8.18.5/package/dist/sweetalert2.min.css" rel="stylesheet" />
  <!-- Argon CSS -->
  <link type="text/css" href="<?=base_url()?>bootstrap/argon-design-system-master/assets/css/argon.css?v=1.1.0" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="<?=base_url()?>Home">
          <img src="<?=base_url()?>bootstrap/argon-dashboard-master/assets/img/brand/logo3.png" alt="brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?=base_url()?>Home">
				<img src="<?=base_url()?>bootstrap/argon-dashboard-master/assets/img/brand/logo2.png" alt="brand">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="<?=base_url()?>CekDiagnosa" class="nav-link" role="button">
                
                <span class="nav-link-inner--text">Diagnosa</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url()?>InfoPenyakit" class="nav-link" role="button">
                
                <span class="nav-link-inner--text">Info Penyakit</span>
              </a>
            </li>
          </ul>
          <?php
          if($this->session->userdata('username')){ ?>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Halo, <?=$info['nama']?></span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">                
                <a href="<?=base_url('Home/logout')?>" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Keluar</span>
                </a>
              </div>
            </li>
          </ul>
        <?php }else{ ?>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a class="nav-link nav-link-icon" href="<?=base_url()?>Login">
                  <i class="ni ni-single-02"></i>
                  <span class="nav-link-inner--text">Masuk</span>
                </a>
            </li>
          </ul>
        <?php } ?>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 shape-default">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
