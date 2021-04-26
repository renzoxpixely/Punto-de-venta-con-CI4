
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">




            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $titulo ?></h4>

                 <?php \Config\Services::validation()->listErrors(); ?>

                  <form method="POST" action="<?php echo base_url(); ?>/productos/actualizar" autocompletar="off">

                    <?php csrf_field(); ?>

                    <input type="hidden" id="id" name="id" value="<?php echo $producto['id']; ?>"/>

                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Código</label>
                          <input class="form-control" type="text"  value="<?php echo $producto['codigo']; ?>" name="codigo" id="codigo" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Nombre</label>
                          <input class="form-control" type="text"  value="<?php echo $producto['nombre']; ?>" name="nombre" id="nombre"  required>
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
                                <option value="<?php echo $unidad['id']; ?>"<?php if($unidad['id'] == $producto['id_unidad']){ echo 'selected'; }?>><?php echo $unidad['nombre'] ?></option>
                              <?php } ?>
                          </select>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Categoría</label>
                          <select class="form-control" id="id_categoria" name="id_categoria" required>
                            <option value="">Seleccionar categoría</option>
                              <?php foreach ($categorias as $categoria) {?>
                                <option value="<?php echo $categoria['id']; ?>"<?php if($categoria['id'] == $producto['id_categoria']){ echo 'selected';} ?>><?php echo $categoria['nombre'] ?></option>
                              <?php } ?>
                          </select>
                        </div>
                        </div>
                  </div>






                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Precio venta</label>
                          <input class="form-control" type="text"  value="<?php echo $producto['precio_venta']; ?>" value="<?php echo $producto['id']; ?>" name="precio_venta" id="precio_venta" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Precio compra</label>
                          <input class="form-control" type="text"  value="<?php echo $producto['precio_compra']; ?>" name="precio_compra" id="precio_compra"  required>
                        </div>
              </div>
           </div>



                    <div class="form-group">
                      <div class="row">
                        <div clas="col-12 col-sm-6">
                          <label>Stock minimo</label>
                          <input class="form-control" type="text"  value="<?php echo $producto['stock_minimo']; ?>" name="stock_minimo" id="stock_minimo" autofocus required>
                        </div>

                        <div clas="col-12 col-sm-6">
                          <label>Es inventariable</label>
                          <select id="inventariable" name="inventariable" class="form-control">
                            <option value="1"  <?php if($producto['inventariable'] == 1){ echo 'selected'; } ?>>Si</option>
                            <option value="0"  <?php if($producto['inventariable'] == 0){ echo 'selected'; } ?>>No</option>
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