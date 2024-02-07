<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        // Carga el helper url
        $this->load->helper('url');
    }
	
	function viewCategoria($id)
	{	
		
		$url_actual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if(base_url() != $url_actual):
			if(!isset($_GET['page'])):
				header("Location: ".$url_actual."?page=1");
			endif;
		endif;

		// Carga de modelos
		$this->load->model('Categorias_model');
		$this->load->model('Productos_model');

		$categorias = $this->Categorias_model->getCategorias();
		$productos = $this->Productos_model->getAllProducts($id);
		
		$articulos_x_pagina = 15;
		$numero_paginas = count($productos) / $articulos_x_pagina;
		$numero_paginas =  ceil($numero_paginas);

		if($_GET['page'] > $numero_paginas || $_GET['page'] < 1):
			$url_actual = explode('?', $url_actual);
			header("Location: ".$url_actual[0]."?page=1");
		endif;
		
		$iniciar = ($_GET['page'] - 1) * $articulos_x_pagina;
		$productosPage = $this->Productos_model->getAllProductsPage($id, $iniciar);

		if(count($categorias) > 0):
			$titulo = "Categoría ".$productosPage[0]['nombre'];
			$this->load->view('headers/head', array('titulo' => $titulo));
			$this->load->view('setup/menu', array('categorias' => $categorias));
			$this->load->view('productosCategorias', array('productos' => $productosPage, 'numero_paginas' => $numero_paginas, 'articulos_x_pagina' => $articulos_x_pagina));
			$this->load->view('footers/footer');
			$this->load->view('footers/foot');
		endif;
	}

	function getCategoriasDestacadas()
	{	
		$this->load->model('Categorias_model');
		$result = $this->Categorias_model->getCategoriasDestacadas();
		if(count($result) > 0):
			return $result;
		endif;
	}

}