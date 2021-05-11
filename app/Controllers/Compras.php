<?php 
	namespace App\Controllers;

	use App\Controllers\BaseController;
	use App\Models\ComprasModel;
	use App\Models\TemporalCompraModel;
	use App\Models\DetalleCompraModel;
	use App\Models\ProductosModel;
	use App\Models\ConfiguracionModel;	

	class Compras extends BaseController
	{
		protected $compras, $temporal_compra, $detalle_compra, $productos,$configuracion;
		protected $reglas;

		public function __construct()
		{
			$this->compras = new ComprasModel();
			$this->detalle_compra = new DetalleCompraModel();
			$this->configuracion = new ConfiguracionModel();
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

		public function guarda()
		{

			$id_compra = $this->request->getPost('id_compra');
			$total = preg_replace('/[\$,]/','',$this->request->getPost('total'));

			$session = session();
			
			$resultadoId = $this->compras->insertaCompra($id_compra, $total, $session->id_usuario);
			
			$this->temporal_compra = new TemporalCompraModel();

			if($resultadoId){
				$resultadoCompra = $this->temporal_compra->porCompra($id_compra);

				foreach ($resultadoCompra as $row){
					$this->detalle_compra->save([
						'id_compra' => $resultadoId,
						'id_producto' => $row['id_producto'],
						'nombre' => $row['nombre'],
						'cantidad' => $row['cantidad'],
						'precio' => $row['precio']
					]);



					$this->productos = new ProductosModel();
					$this->productos -> actualizarStock($row['id_producto'], $row['cantidad']);
					
				}
				$this->temporal_compra->eliminarCompra($id_compra);
			}
			return redirect()->to(base_url()."/productos");
		}


		function muestraCompraPdf($id_compra){
			$data['id_compra'] = $id_compra;
			echo view('header');
			echo view('compras/ver_compra_pdf');
			echo view('footer');
		}

		function generaCompraPdf($id_compra){
			$datosCompra = $this->compras->where('id', $id_compra)->first();
			$detalleCompra = $this->detalle_compra->select('*')->where('id_compra', $id_compra)->findAll();
			$nombreTienda = $this->configuracion->select('valor')->where('nombre', 'tienda_nombre')->get()->getRow()->valor;
			$direccionTienda = $this->configuracion->select('valor')->where('nombre','tienda_direccion')->get()->getRow()->valor;

			$pdf = new \FPDF('P', 'mm', 'letter');
			$pdf->AddPage();
			$pdf->SetMargins(10,10,10);
			$pdf->SetTitle("Compra");
			$pdf->SetFont('Arial', 'B',10);

			$pdf->Output("compra_pdf.pdf", "I");
		}

	}
 
