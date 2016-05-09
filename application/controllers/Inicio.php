<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Inicio extends CI_Controller {

	public function index()
	{
		/*
		|--------------------------------------------------------------------------
		| Definir Constantes
		|--------------------------------------------------------------------------
		*/
		define('IMAGES', base_url('assets/images') ); 

		//cargar página principal
		$this->load->view('templates/header');
		$this->load->view('page/inicio');
		$this->load->view('templates/footer');
	}
}
