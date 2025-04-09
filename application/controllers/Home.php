<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}
	
	public function index()
	{

		$data = array(
			'titulo' => 'Utrial | Home',
			'sub_titulo' => 'Bem vindo(a)',
			'icone_view' => 'fa-solid fa-house-user',
			'styles' => array(
				'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
				'dist/css/estacionar.css',
			),
			
			'scripts' => array(
				'plugins/datatables.net/js/jquery.dataTables.min.js',
                'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                'plugins/datatables.net/js/traducaodatatables.js',
                'dist/js/util.js',
			),
			
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('home/index');
		$this->load->view('layout/footer');

	}
}
