<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('');
	}

	public function editInfoUsuario($id = null)
	{
		$data = array(
			'titulo' => 'Utrial | Minha conta',
			'sub_titulo' => 'Edite suas informações',
			'icone_view' => 'fa-solid fa-user',
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

		// Verifica se o ID foi passado
		if ($id) {
			$info['aluno'] = $this->Alunos_model->get_by_id($id);
		}

		if ($id != $this->session->userdata('usuario_id')) {
			$this->Auth->logout;
    		redirect('/login');
		}

		$this->load->view('layout/header', $data);
		$this->load->view('usuario/editInfoUsuario', $info);
		$this->load->view('layout/footer');

	}

}
