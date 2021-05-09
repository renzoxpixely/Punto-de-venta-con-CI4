<?php 
	namespace App\Controllers;

	use App\Controllers\BaseController;
	use App\Models\TemporalCompraModel;
	use App\Models\ProductosModel;

	class TemporalCompra extends BaseController
	{
		protected $temporal_compra, $productos;

		public function __construct()
		{
			$this->temporal_compra = new TemporalCompraModel();
			$this->productos = new ProductosModel();		

		}

		public function inserta($id_producto, $cantidad, $id_compra)
		{

			$error = '';

			$producto = $this->productos->where('id', $id_producto)->first();

			if($producto){
				$datosExiste = $this->temporal_compra->porIdProductoCompra($id_producto, $id_compra);
				if ($datosExiste) {
					$cantidad = $datoExiste-> cantidad + $cantidad;
					$subtotal = $cantidad * $datosExiste ->precio;
				} else {
					$subtotal = $cantidad * $producto['precio_compra'];

					$this->temporal_compra->save([
						'folio' => $id_compra,
						'id_producto' => $id_producto,
						'codigo' => $producto['codigo'],
						'nombre' => $producto['nombre'],
						'precio' => $producto['precio_compra'],
						'cantidad' => $cantidad,
						'subtotal' => $subtotal,
					]);



				}
				
			} else{
				$error = 'No existe el producto';
			}

			$res['datos'] = $this->cargarProductos($id_compra);
			$res['total'] = $this->totalProductos($id_compra);
			$res['error'] = $error;
			echo json_encode($res);
			
		}

		public function cargarProductos(){
			$resultado = $this->tenporal_compra->porCompra($id_compra);
			$fila = '';
			$numFila = 0;

			foreach($resulado as $row){
				$numFila++;
				$fila .= "<tr id='fila".$numFila."'>" ;
				$fila .= "<td>".$numFila."</td>";
				$fila .= "<td/>".['codigo']."</td>";
				$fila .= "<td/>".['nombre']."</td>";
				$fila .= "<td/>".['precio']."</td>";
				$fila .= "<td/>".['cantidad']."</td>";
				$fila .= "<td/>".['subtotal']."</td>";
				$fila .= "<td/><a onclick=\"eliminaProducto(".$row['id_producto'].",'".$id_compra."')\" class='borrar'><span class='fas fa-fw-fa-trash'></span></a></td>";
				$fila .= "</tr>";
				
			}
			return $fila;
		}


		public function totalProductos(){
			$resultado = $this->tenporal_compra->porCompra($id_compra);
			$total = 0;
			

			foreach($resulado as $row){
				$total += $row['subtotal'];
				
			}
			return $fila;
		}


	}
 