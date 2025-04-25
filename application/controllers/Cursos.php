<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller{

    public function __construct(){
		parent:: __construct();
	}
	
	public function index()
	{
		$data = array(
			'titulo' => 'Utrial | Cursos',
			'sub_titulo' => 'Veja todos os nossos cursos',
			'icone_view' => 'fas fa-book',
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
		$this->load->view('cursos/index');
		$this->load->view('layout/footer');

	}

}
