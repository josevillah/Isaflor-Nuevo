<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        // Carga el helper url
        $this->load->helper('url');
    }

	public function index()
	{	
			$this->load->model('Categorias_model');
			$categorias = $this->Categorias_model->getCategorias();
			$categoriasDes = $this->Categorias_model->getCantidadCategorias();

			// Ejecuta el proceso de generar categorías aleatorias
			$this->Categorias_model->obtenerDatosAleatorios();
			
			// Obtiene 5 productos de una categoría aleatoria
			$datosAleatorios = $this->Categorias_model->datosAleatorios;

			$this->load->model('Productos_model');
			$ofertas = $this->Productos_model->getOfertasProductos();

			if(count($categorias) > 0 && count($categoriasDes) > 0):
				$titulo = "Página principal";
				$this->load->view('headers/head', array('titulo' => $titulo));
				$this->load->view('setup/menu', array('categorias' => $categorias));
				$this->load->view('banners');
				$this->load->view('categorias', array(
					'categoriasDes' => $categoriasDes,
					'ofertas' => $ofertas,
					'aleatoriosUno' => $datosAleatorios['datosUno'],
					'aleatoriosDos' => $datosAleatorios['datosDos']
				));
				$this->load->view('footers/footer');
				$this->load->view('footers/foot');
			endif;
	}
}