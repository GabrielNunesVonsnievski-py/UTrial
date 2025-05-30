<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller{

    public function __construct(){
		parent:: __construct();

		$this->load->model('Alunos_model');

		if (!$this->session->userdata('logado')) {
			redirect('/login');
		}

		if(!$this->session->userdata('is_admin')) {
			$this->session->set_flashdata('info', 'Você você não tem permissão para essa página!' );
		}
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Utrial | Alunos',
			'sub_titulo' => 'Lista de alunos',
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

		$data['getListaAlunos'] = $this->Alunos_model->getListaAlunos();

		$this->load->view('layout/header', $data);
		$this->load->view('alunos/index');
		$this->load->view('layout/footer');

	}

    public function core($id = null)
	{
		$data = array(
			'titulo' => 'Utrial | Alunos',
			'sub_titulo' => 'Edite informações dos seus alunos',
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

		if ($id) {
			$info['aluno'] = $this->Alunos_model->get_by_id($id);
		}

		$this->load->view('layout/header', $data);
		$this->load->view('alunos/core', $info);
		$this->load->view('layout/footer');

	}

	public function deletar($id) {
        $this->load->model('Alunos_model');
        if ($this->Alunos_model->deletar($id)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'erro']);
        }
	}
}
