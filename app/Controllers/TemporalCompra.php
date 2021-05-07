<?php 
	namespace App\Controllers;

	use App\Controllers\BaseController;
	use App\Models\TemporalCompraModel;
	use App\Models\ProductoModel;

	class TemporalCompra extends BaseController
	{
		protected $temporal_compra, $productos;
		protected $reglas;

		public function __construct()
		{
			$this->temporal_compra = new TemporalCompraModel();
			$this->productos = new ProductosModel();		

		}

		public function insertar($id_producto, $cantidad, $id_compra)
		{

			if ($this->request->getMethod() == "post" && $this->validate($this->reglas)) {
				$this->unidades->save(['nombre' => $this->request->getPost('nombre'), 'nombre_corto' => $this->request->getPost('nombre_corto')]);
				return redirect()->to(base_url() . '/unidades');
			} else {
				$data = ['titulo' => 'Agregar unidad','validation' => $this->validator];

				echo view('header');
				echo view('unidades/nuevo', $data);
				echo view('footer');
			}
			


			
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
 