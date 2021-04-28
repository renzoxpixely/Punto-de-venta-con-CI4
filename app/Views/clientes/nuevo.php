
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

                  <form method="POST" action="<?php echo base_url(); ?>/clientes/insertar" autocompletar="off">

                    <?php csrf_field(); ?>

                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Nombre</label>
                          <input class="form-control" type="text" name="nombre" id="nombre" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Dirección</label>
                          <input class="form-control" type="text" name="direccion" id="direccion"  autofocus>
                        </div>
                          </div>
                          </div>


                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>telefono</label>
                          <input class="form-control" type="text" name="telefono" id="telefono" autofocus >
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>correo</label>
                          <input class="form-control" type="text" name="correo" id="correo"  >
                        </div>
                          </div>
                          </div>

   
                        <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                
                  

                  </form>













          </div>
        </div>
       </div>
      </div>        
   </div>
  </div>       <!-- content-wrapper ends -->
  

 </div> 