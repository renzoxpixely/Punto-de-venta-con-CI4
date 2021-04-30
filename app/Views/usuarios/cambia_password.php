
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">




            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $titulo ?></h4>


                 <?php  if (isset($validation)) {?>
                  <div class="alert alert-danger">
                    <?php echo $validation->listErrors(); ?>
                 </div>
                 <?php } ?>
                 
                  <form method="POST" action="<?php echo base_url(); ?>/usuarios/actualizar_password" autocompletar="off">

                    

               
                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Usuario</label>
                          <input class="form-control" type="text" name="usuario" id="usuario" value="<?php echo $usuario['usuario']; ?>" disabled >
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Nombre</label>
                          <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $usuario['nombre']; ?>"  disabled>
                        </div>
                          </div>
                          </div>


                       <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Contraseña</label>
                          <input class="form-control" type="password" name="password" id="password"  required >
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Confirma contraseña</label>
                          <input class="form-control" type="password" name="repassword" id="repassword"   required>
                        </div>
                          </div>
                          </div>
                             
                        <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                 <?php  if (isset($mensaje)) {?>
                  <div class="alert alert-success">
                    <?php echo $mensaje; ?>
                 </div>
                 <?php } ?>

                  </form>













          </div>
        </div>
       </div>
      </div>        
   </div>
  </div>       <!-- content-wrapper ends -->
  

 </div> 