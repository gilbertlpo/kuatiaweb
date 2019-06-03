<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//se crea el controlador categorias
class Clientes extends CI_Controller {
//constructor
	public function __construct(){
		parent::__construct();
		$this->load->model("Clientes_model");
    }

    public function index()
	{
		$data = array(
			'clientes' => $this->Clientes_model->getClientes(),

		);
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/reportes/list_cliente',$data);
		$this->load->view('layouts/footer');
		//$this->load->view('productos/script_productos');
}
}