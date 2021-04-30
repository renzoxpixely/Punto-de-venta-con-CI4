
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


                  <form method="POST" action="<?php echo base_url(); ?>/clientes/actualizar" autocompletar="off">

                    <?php csrf_field(); ?>

                    <input type="hidden" id="id" name="id" value="<?php echo $cliente['id']; ?>"/>

                      <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Nombre</label>
                          <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $cliente['nombre']; ?>" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Dirección</label>
                          <input class="form-control" type="text" name="direccion" id="direccion" value="<?php echo $cliente['direccion']; ?>" >
                        </div>
                          </div>
                          </div>


                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>telefono</label>
                          <input class="form-control" type="text" name="telefono" id="telefono" autofocus value="<?php echo $cliente['telefono']; ?>" >
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>correo</label>
                          <input class="form-control" type="text" name="correo" id="correo" value="<?php echo $cliente['correo']; ?>" >
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