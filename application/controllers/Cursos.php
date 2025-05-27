<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller{

    public function __construct(){
		parent:: __construct();

		$this->load->model('Cursos_model');

		if (!$this->session->userdata('logado')) {
			redirect('/login');
		}
	}

	public function index()
	{
		$datacursos['cursos'] = $this->Cursos_model->getListaCursos();

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
		$this->load->view('cursos/index', $datacursos);
		$this->load->view('layout/footer');

	}

	public function HTML(){

		$data = array(
			'titulo' => 'Utrial | Cursos',
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

		$data['getCursoHTML'] = $this->Cursos_model->getCursoHTML();

		$this->load->view('layout/header', $data);
		$this->load->view('cursos/HTML');
		$this->load->view('layout/footer');

	}


}
