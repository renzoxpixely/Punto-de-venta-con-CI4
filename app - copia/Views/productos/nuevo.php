
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

                  <form method="POST" action="<?php echo base_url(); ?>/productos/insertar" autocompletar="off">

                    <?php csrf_field(); ?>

                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Código</label>
                          <input class="form-control" type="text" name="codigo" id="codigo" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Nombre</label>
                          <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo set_value('nombre') ?>" required>
                        </div>
                          </div>
                          </div>



                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Unidad</label>
                          <select class="form-control" id="id_unidad" name="id_unidad" required>
                            <option value="">Seleccionar unidad</option>
                              <?php foreach ($unidades as $unidad) {?>
                                <option value="<?php echo $unidad['id']; ?>"><?php echo $unidad['nombre'] ?></option>
                              <?php } ?>
                          </select>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Categoría</label>
                          <select class="form-control" id="id_categoria" name="id_categoria" required>
                            <option value="">Seleccionar categoría</option>
                              <?php foreach ($categorias as $categoria) {?>
                                <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre'] ?></option>
                              <?php } ?>
                          </select>
                        </div>
                        </div>
                  </div>






                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Precio venta</label>
                          <input class="form-control" type="text" name="precio_venta" id="precio_venta" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Precio compra</label>
                          <input class="form-control" type="text" name="precio_compra" id="precio_compra"  required>
                        </div>
              </div>
           </div>



                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Stock minimo</label>
                          <input class="form-control" type="text" name="stock_minimo" id="stock_minimo" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Es inventariable</label>
                          <select id="inventariable" name="inventariable" class="form-control">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                          </select>
                        </div>
              </div>
           </div>


   
                        <a href="<?php echo base_url(); ?>/productos" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                
                  

                  </form>













          </div>
        </div>
       </div>
      </div>        
   </div>
  </div>       <!-- content-wrapper ends -->
  

 </div> 