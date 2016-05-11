<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function __construct()
	{
    // Call the CI_Model constructor
		parent::__construct();
	}

	//Conseguir los banners
	public function get_banners()
	{
		$query = $this->db->get('banners');
    return $query->result();		
	} 

	//Insertar los banners
	public function insert_banner()
	{
		$data = array(
			'nombre' => $this->input->post('banner_title')
		);

		$this->db->insert('banners', $data);
		$query = $this->db->affected_rows(); 
		return $query;			
	}


}

