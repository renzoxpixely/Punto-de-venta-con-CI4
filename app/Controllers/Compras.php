<?php 
	namespace App\Controllers;

	use App\Controllers\BaseController;
	use App\Models\ComprasModel;

	class Compras extends BaseController
	{
		protected $compras;
		protected $reglas;

		public function __construct()
		{
			$this->compras = new ComprasModel();
			helper(['form']);


		}

		public function index($activo = 1)
		{
			$unidades = $this->unidades->where('activo',$activo)->findAll();
			$data = ['titulo' => 'Unidades', 'datos' =>$unidades];
			echo view('header');
			echo view('unidades/unidades', $data);
			echo view('footer');
		}



		public function eliminados($activo = 0)
		{
			$unidades = $this->unidades->where('activo',$activo)->findAll();
			$data = ['titulo' => 'Unidades eliminadas', 'datos' =>$unidades];
			echo view('header');
			echo view('unidades/eliminados', $data);
			echo view('footer');
		}






		public function nuevo()
		{
			

			echo view('header');
			echo view('compras/nuevo');
			echo view('footer');
		}

		public function insertar()
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
 