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

			$res['error'] = $error;
			echo json_encode($res);
			
		}


		public function editar($id, $valid=null)
		{
			$unidad = $this->unidades->where('id',$id)->first();

			if ($valid != null) {
				$data = ['titulo' => 'Editar unidad', 'datos'  => $unidad, 'validation' => $valid];
			} else {
				$data = ['titulo' => 'Editar unidad', 'datos'  => $unidad];
			}
			
			
		

			echo view('header');
			echo view('unidades/editar', $data);
			echo view('footer');
		}


		public function actualizar()
		{

			if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {
				$this->unidades->update($this->request->getPost('id'),['nombre'=>$this->request->getPost('nombre'), 'nombre_corto' => $this->request->getPost('nombre_corto')]);
				return redirect()->to(base_url().'/unidades');
			}else{
				return $this->editar($this->request->getPost('id'), $this->validator);
			}
		}

		public function eliminar($id)
		{
			$this->unidades->update($id, ['activo'=> 0]);
			return redirect()->to(base_url().'/unidades');
		}


		public function reingresar($id)
		{
			$this->unidades->update($id, ['activo'=> 1]);
			return redirect()->to(base_url().'/unidades');
		}


	}
 