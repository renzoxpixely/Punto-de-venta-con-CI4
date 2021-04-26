
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">




            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $titulo ?></h4>

                 
                  <form method="POST" action="<?php echo base_url(); ?>/categorias/actualizar" autocompletar="off">

                    

                  <input type="hidden" value="<?php echo $datos['id'] ?>" name="id">

                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Nombre</label>
                          <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $datos['nombre']; ?>" autofocus require>
                        </div>

                       
                          </div>
                          </div>
                          
                        <a href="<?php echo base_url(); ?>/categorias" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                
                  

                  </form>













          </div>
        </div>
       </div>
      </div>        
   </div>
  </div>       <!-- content-wrapper ends -->
  

 </div> 