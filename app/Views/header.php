<?php 
  $user_session=session();
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/images/favicon.png" />

  <script src="<?php echo base_url(); ?>/js/jquery-3.6.0.min.js"></script>
    
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="<?php echo base_url(); ?>/images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="<?php echo base_url(); ?>/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="<?php echo base_url(); ?>/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="<?php echo base_url(); ?>/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="<?php echo base_url(); ?>/images/faces/face3.jpg" alt="image" class="profile-pic">
                   <!-- <a class="navbar-brand" href="index.html">$nombre = $this->configuracion->where('nombre', 'tienda_nombre')->first();</a> -->
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo base_url(); ?>/images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name"><?php echo $user_session->nombre; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?php echo base_url(); ?>/usuarios/cambiar_password">
                <i class="mdi mdi-settings text-primary"></i>
                Cambiar contraseña
              </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>/usuarios/logout">
                <i class="mdi mdi-logout text-primary"></i>
                Cerrar sesión
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
<!-- 
          tablero
          <li class="nav-item">
            <a class="nav-link" href="../../index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Tablero</span>
            </a>
          </li> -->
          
          
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-shopping menu-icon"></i>
              <span class="menu-title">Productos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>/productos"> Productos </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>/unidades"> Unidades </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>/categorias"> Categorías </a></li>
              </ul>
            </div>
          </li>


      <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>/clientes">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Clientes</span>               
            </a>

            </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menucompras" aria-expanded="false" aria-controls="menucompras">
              <i class="mdi mdi-cash-usd menu-icon"></i>
              <span class="menu-title">Compras</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menucompras">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>/compras/nuevo"> Nueva compra </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>/compras"> Compras </a></li>
               </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tools" aria-expanded="false" aria-controls="tools">
              <i class="mdi mdi-nut menu-icon"></i>
              <span class="menu-title">Administración</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tools">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>/configuracion"> Configuración </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>/usuarios"> Usuarios </a></li>
              </ul>
            </div>
          </li>



        </ul>
      </nav>

   