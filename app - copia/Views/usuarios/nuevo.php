
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

                  <form method="POST" action="<?php echo base_url(); ?>/usuarios/insertar" autocompletar="off">

                    <?php csrf_field(); ?>

                    <div class="form-group">
                      <div class="row">

                        <div clas="col-12 col-sm-6">
                          <label>Usuario</label>
                          <input class="form-control" type="text" value="<?php echo set_value('usuario') ?>" name="usuario" id="usuario" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Nombre</label>
                          <input class="form-control" type="text" value="<?php echo set_value('nombre') ?>" name="nombre" id="nombre"  required>
                        </div>
                          


                        <div clas="col-12 col-sm-6">
                          <label>Contraseña</label>
                          <input class="form-control" type="password" value="<?php echo set_value('password') ?>" name="password" id="password"  required>
                        </div>
                   

                        <div clas="col-12 col-sm-6">
                          <label>Repite contraseña</label>
                          <input class="form-control" type="password" value="<?php echo set_value('repassword') ?>" name="repassword" id="repassword"  required>
                        </div>
                          </div>
                                              <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Caja</label>
                          <select class="form-control" id="id_caja" name="id_caja" required>
                            <option value="">Seleccionar caja</option>
                              <?php foreach ($cajas as $caja) {?>
                                <option value="<?php echo $caja['id']; ?>"><?php echo $caja['nombre']; ?></option>
                              <?php } ?>
                          </select>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Rol</label>
                          <select class="form-control" id="id_rol" name="id_rol" required>
                            <option value="">Seleccionar rol</option>
                              <?php foreach ($roles as $rol) {?>
                                <option value="<?php echo $rol['id']; ?>"><?php echo $rol['nombre']; ?></option>
                              <?php } ?>
                          </select>
                        </div>
                        </div>
                  </div>





                          </div>

                        <a href="<?php echo base_url(); ?>/usuarios" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                
                  

                  </form>













          </div>
        </div>
       </div>
      </div>        
   </div>
  </div>       <!-- content-wrapper ends -->
  

 </div> 