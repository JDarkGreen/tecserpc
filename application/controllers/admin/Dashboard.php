<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends CI_Controller
{
 
	function __construct()
  {
    parent::__construct();
    #cargar modelo
    $this->load->model('admin/dashboard_model');
  }
 
  public function index()
  {
		/*
		|--------------------------------------------------------------------------
		| Definir Constantes
		|--------------------------------------------------------------------------
		*/
		define('IMAGES', base_url('assets/images') ); 
		
  	#Cargar las vistas
    $data['active'] = "dashboard";
    $data['aside']  = $this->load->view('admin/aside_common', $data , true);

    $this->load->view('admin/header', $data );
    $this->load->view('admin/dashboard_view' );
    $this->load->view('admin/footer');
  }

  public function banners()
  {
  	#Cargar las vistas
    $data['active'] = "banners";
    $data['aside']  = $this->load->view('admin/aside_common', $data ,true);

    #llamar y obtener todos los banners
    $data['banners'] = $this->dashboard_model->get_banners();

    $this->load->view('admin/header' , $data );
    $this->load->view('admin/banners_view' );
    $this->load->view('admin/footer');
  }

  #Agregar Banners
  public function insert_banner()
  {
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '100';
		$config['max_width']     = '1024';
		$config['max_height']    = '768';

		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload() )
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump( $error ); 
			//$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data() );

	  	$result = $this->dashboard_model->insert_banner();
	  	if( count($result) > 0 ){ 
	  		redirect('/admin/dashboard/banners'); 
	  	}

		}

  }




}



?>