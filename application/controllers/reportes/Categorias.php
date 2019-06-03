<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//se crea el controlador categorias
class Categorias extends CI_Controller {
//constructor
	public function __construct(){
		parent::__construct();
		$this->load->model("Categorias_model");
    }

    public function index()
	{
		$data = array(
			'categotias' => $this->Categorias_model->getCategorias(),

		);
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/reportes/list_categoria',$data);
		$this->load->view('layouts/footer');
		//$this->load->view('productos/script_productos');
}
}