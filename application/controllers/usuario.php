<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

 	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();

       	//Cargamos librerias requeridas
       	//$this->load->library('database'); //Ahora se carga desde  application/config/autoload

		$this->load->helper(array('form', 'url'));
        //Cargamos Modelos
        $this->load->model('usuario_model');
	}

	public function index()
	{
		$this->listado();
	}


	public function listado()
	{

		//Obtener informacion desde el Modelo
		$data['sql_usuarios'] = $this->usuario_model->get_all();

		//Realizar lógica de negocio
		//toDo

		//Enviar salida a la Vista
		$this->load->view('usuario/listado',$data);
	}

	public function nuevo()
	{
		echo 'Implementar Insert, Validando utilizando <b>Form Validation</b>';
	}

	public function ver($id){}

	public function editar($id){}

	public function eliminar($id){}
}
