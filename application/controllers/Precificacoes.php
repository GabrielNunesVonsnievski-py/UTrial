<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Precificacoes extends CI_Controller{

    public function __construct(){
		parent:: __construct();

		$this->load->model('Precificacoes_model');

		if (!$this->session->userdata('logado')) {
			redirect('/login');
		}
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Utrial | Precificações',
			'sub_titulo' => 'Gerenciar Precificações',
			'icone_view' => 'fas fa-users',
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

		$data['getListaPrecificacoes'] = $this->Precificacoes_model->getListaPrecificacoes();

		$this->load->view('layout/header', $data);
		$this->load->view('precificacoes/index');
		$this->load->view('layout/footer');

	}


}
