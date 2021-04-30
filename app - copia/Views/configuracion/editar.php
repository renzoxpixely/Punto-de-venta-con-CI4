
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
                 
                  <form method="POST" action="<?php echo base_url(); ?>/unidades/actualizar" autocompletar="off">

                    

                  <input type="hidden" value="<?php echo $datos['id'] ?>" name="id">

                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Nombre</label>
                          <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $datos['nombre']; ?>" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Nombre corto</label>
                          <input class="form-control" type="text" name="nombre_corto" id="nombre_corto" value="<?php echo $datos['nombre_corto']; ?>"  required>
                        </div>
                          </div>
                          </div>
                          
                        <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                
                  

                  </form>













          </div>
        </div>
       </div>
      </div>        
   </div>
  </div>       <!-- content-wrapper ends -->
  

 </div> 