
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">




            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">


                  <form method="POST" action="<?php echo base_url(); ?>/compras/guarda" autocompletar="off">

                    <div class="form-group">
                      <div class="row">

                        <div clas="col-12 col-sm-4">
                          <input type="hidden" name="id_producto" id="id_producto"/>
                          <label>Código</label>

                          <input class="form-control" type="text" name="codigo" id="codigo" autofocus placeholder="Escribe el codigo y enter" onkeyup="buscarProducto(event, this,this.value)">

                          <label for="codigo" id="resultado_error" style="color: red"></label>
                        </div>

                        <div clas="col-12 col-sm-4">
                          <label>Nombre del producto</label>
                          <input class="form-control" type="text"  name="nombre" id="nombre"  required disabled>
                        </div>
                          
                        <div clas="col-12 col-sm-4">
                          <label>Cantidad</label>
                          <input class="form-control" type="text"  name="cantidad" id="cantidad" >
                        </div>
                          </div>


                      <div class="row">

                        <div clas="col-12 col-sm-4">
                          <label>Precio de compra</label>
                          <input class="form-control" type="text" name="precio_compra" id="precio_compra" disabled>
                        </div>

                        <div clas="col-12 col-sm-4">
                          <label>Subtotal</label>
                          <input class="form-control" type="text"  name="subtotal" id="subtotal"   disabled>
                        </div>
                          
                        <div clas="col-12 col-sm-4">
                          <label><br>&nbsp;</label>
                          <button id="agregar_producto" name="agregar_producto" type="button" class="btn btn-primary form-control">Agregar producto</button>
                        </div>

                          </div>

                          </div>

                        <div class="row">
                          <table id="tablaProductos" class="table table-hover table-striped table-sm table-responsive tablaProductos" width="100%">
                            <thead class="thead-dark">
                              <th>#</th>
                              <th>Código</th>
                              <th>Nombre</th>
                              <th>Precio</th>
                              <th>Cantidad</th>
                              <th>Total</th>
                              <th width="1%"></th>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>

                        <div class="row">
                          <div class="col-12 col-sm-6 offset-md-6">
                            <label style="font-weight: bold; font-size: 30px; text-align: center;">Total $</label>
                            <input type="text" name="total" id="total" size="7" readonly="true" value="0.00" style="font-weight: bold; font-size: 30px; text-align: center;" />

                            <button type="button" id="completa_compra" class="btn btn-success">Completar compra</button>

                          </div>
                        </div>

                        
                
                  

                  </form>


          </div>
        </div>
       </div>
      </div>        
   </div>
  </div>       <!-- content-wrapper ends -->
  

 </div> 

 <script>
    $(document).ready(function(){

    });

    function buscarProducto(e, tagCodigo, codigo){
      var enterKey = 13;
      if(codigo != ''){
        if(e.which == enterKey){
          $.ajax({
            url: '<?php echo base_url(); ?>/productos/buscarPorCodigo/' + codigo,dataType: 'json',
            success: function(resultado){
              if(resultado == 0){
                $(targCodigo).val('');
              }else{
                //$(tagCodigo).removeClass('has-error');

                $("#resultado_error").html(resultado.error);

                if (resultado.existe) {
                  $("#id_producto").val(resultado.datos.id);
                  $("#nombre").val(resultado.datos.nombre);
                  $("#cantidad").val(1);
                  $("#precio_compra").val(resultado.datos.id);
                  $("#subtotal").val(resultado.datos.precio_compra);
                  $("#cantidad").focus();                 
                }
                else{
                  $("#id_producto").val('');
                  $("#nombre").val('');
                  $("#cantidad").val(1);
                  $("#precio_compra").val('');
                  $("#subtotal").val(''); 
                }
              }
            }

          });
        }
      }
    }
 </script>