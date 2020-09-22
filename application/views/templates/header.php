<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Sistem Pakar Penyakit Umum
  </title>

  <!-- DataTables -->
  <link href="<?=base_url()?>bootstrap/DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="<?=base_url()?>bootstrap/DataTables/DataTables-1.10.20/css/twitterBootstrap.css" rel="stylesheet" />

  <!-- SweetAlert2 -->
  <link href="<?=base_url()?>bootstrap/sweetalert2-8.18.5/package/dist/sweetalert2.min.css" rel="stylesheet" />

  <!-- Favicon -->
  <link href="<?=base_url()?>bootstrap/medical.png" rel="icon" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <!-- Icons -->
  <link href="<?=base_url()?>bootstrap/argon-dashboard-master/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?=base_url()?>bootstrap/argon-dashboard-master/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="<?=base_url()?>bootstrap/argon-dashboard-master/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />

</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="#" >
        <img src="<?=base_url()?>bootstrap/argon-dashboard-master/assets/img/brand/logo2.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="mb-0 text-sm  font-weight-bold">Halo, <?=$info['nama']?></span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <a href="<?=base_url()?>Admin/logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="#">
                <img src="<?=base_url()?>bootstrap/argon-dashboard-master/assets/img/brand/favicon.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  class=" active" ">
            <a class=" nav-link <?= $active1 ?> " href="<?=base_url()?>Admin"> <i class="ni ni-tv-2 text-primary"></i> Dasbor
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=$active3?>" href="<?=base_url()?>Users">
              <i class="ni ni-single-02 text-yellow"></i> Pakar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=$active2?>" href="<?=base_url()?>Penyakit">
              <i class="ni ni-favourite-28 text-red"></i> Penyakit
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=$active4?>" href="<?=base_url()?>Gejala">
              <i class="ni ni-bullet-list-67 text-blue"></i> Gejala
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=$active5?>" href="<?=base_url()?>Relasi">
              <i class="ni ni-ui-04 text-green"></i> Relasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('Admin/logout')?>">
              <i class="ni ni-button-power text-pink"></i> Keluar
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"><?=$judul?></a>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Halo, <?=$info['nama']?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="<?=base_url('Admin/logout')?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Keluar</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- <div class="header bg-gradient-warning pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
    <div class="header-body">
  </div>
</div>
</div> -->
