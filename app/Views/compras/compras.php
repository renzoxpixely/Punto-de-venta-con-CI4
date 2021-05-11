
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">




            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $titulo ?></h4>

                  <div>
                  	<p>
                  		<a href="<?php echo base_url(); ?>/usuarios/nuevo" class="btn btn-info">Agregar</a>
                  		<a href="<?php echo base_url(); ?>/usuarios/eliminados" class="btn btn-info">Eliminados</a>
                  	</p>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                            Usuario
                          </th>
                          <th>
                            Nombre
                          </th>
                          <th>
                          </th>

                        </tr>
                      </thead>
                      <tbody>
                      	<?php //foreach ($datos as $dato) {           
                      	 ?>
                      	<tr>
                      		<td><?php //echo $dato['id']; ?></td>
                      		<td><?php //echo $dato['usuario']; ?></td>
                      		<td><?php// echo $dato['nombre']; ?></td>

                      		<td><a href="<?php //echo base_url(). '/usuarios/cambiar_password/' . $dato['id'];?>" class="btn btn-warning"><i class="mdi mdi-pencil menu-icon" ></i></a></td>

                      		<td><a href="#" data-href="<?php //echo base_url(). '/usuarios/eliminar/' . $dato['id'];?>"data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Eliminar registro" class="btn btn-danger"><i class="mdi mdi-window-close menu-icon" ></i></a></td>
                      		
                      	</tr>


                      <?php //} ?>


                      </tbody>
                    </table>
                  </div>
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
