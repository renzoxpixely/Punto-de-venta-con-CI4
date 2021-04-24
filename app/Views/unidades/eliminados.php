
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
                  	
                  		<a href="<?php echo base_url(); ?>/unidades" class="btn btn-info">Unidades</a>
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
                            Nombre
                          </th>
                          <th>
                            Nombre corto
                          </th>
                          <th>
                          </th>

                        </tr>
                      </thead>
                      <tbody>
                      	<?php foreach ($datos as $dato) {           
                      	 ?>
                      	<tr>
                      		<td><?php echo $dato['id']; ?></td>
                      		<td><?php echo $dato['nombre']; ?></td>
                      		<td><?php echo $dato['nombre_corto']; ?></td>

                      		<td><a href="<?php echo base_url(). '/unidades/reingresar/' . $dato['id'];?>" class="btn btn-warning"><i class="mdi mdi-arrow-up-bold menu-icon" ></i></a></td>


                      		
                      	</tr>


                      <?php } ?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
 














          </div>
        </div>
        <!-- content-wrapper ends -->
