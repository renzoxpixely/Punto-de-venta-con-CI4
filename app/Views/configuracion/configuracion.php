
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

                  <form method="POST" action="<?php echo base_url(); ?>/configuracion/actualizar" autocompletar="off">

                    <?php csrf_field(); ?>

                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Nombre de la tienda</label>
                          <input class="form-control" type="text" value="<?php echo $nombre['valor']; ?>" name="tienda_nombre" id="tienda_nombre" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>RFC</label>
                          <input class="form-control" type="text" value="<?php echo $rfc['valor']; ?>" name="tienda_rfc" id="tienda_rfc"  required>
                        </div>
                          </div>
                        </div>

                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Telefono de la tienda</label>
                          <input class="form-control" type="text" value="<?php echo $telefono['valor']; ?>" name="tienda_telefono" id="tienda_telefono" required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Correo de la tienda</label>
                          <input class="form-control" type="text" value="<?php echo $email['valor']; ?>" name="tienda_email" id="tienda_email"  required>
                        </div>
                          </div>
                        </div>

                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Direccion de la tienda</label>
                          <textarea class="form-control" id="tienda_direccion" name="tienda_direccion" required><?php echo $direccion['valor']; ?></textarea>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Leyenda del ticket</label>       
                          <textarea class="form-control" id="ticket_leyenda" name="ticket_leyenda" required><?php echo $leyenda['valor']; ?></textarea>

                         
                        </div>
                          </div>
                        </div>



                          
                        <a href="<?php echo base_url(); ?>/configuracion" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                
                  

                  </form>
                </div>
              </div>
            </div>
 <!-- 24.50 -->
<!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea eliminar este registro?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
        <a type="button" class="btn btn-danger btn-ok">Sí</a>
      </div>
    </div>
  </div>
</div>












          </div>
        </div>
        <!-- content-wrapper ends -->
