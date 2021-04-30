<?php 
  $user_session=session();

 ?>

<!DOCTYPE html>
<html lang="en">

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
</head>

<body>
  <?php print_r($user_session->nombre); ?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url(); ?>/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>


                 
              <h6 class="font-weight-light">Iniciar sesión.</h6>
              <form class="pt-3" method="POST" action="<?php echo base_url(); ?>/usuarios/valida">

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="usuario" id="usuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Contraseña">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Entrar</button>
                </div>

                <?php  if (isset($validation)) {?>
                  <div class="alert alert-danger">
                    <?php echo $validation->listErrors(); ?>
                 </div>
                 <?php } ?>

                 <?php  if (isset($error)) {?>
                  <div class="alert alert-danger">
                    <?php echo $error; ?>
                 </div>
                 <?php } ?>


                <div class="my-2 d-flex justify-content-between align-items-center">

                
                </div>

            
        
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>/js/template.js"></script>
</body>

</html>
