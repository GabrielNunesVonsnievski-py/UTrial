<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aulas extends CI_Controller{

    public function __construct(){
		parent:: __construct();

		$this->load->model('Aulas_model');
		$this->load->model('Cursos_model');

		if(!$this->session->userdata('is_admin')) {
			$this->session->set_flashdata('info', 'Você você não tem permissão para essa página!' );
		}

		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Utrial | Aulas',
			'icone_view' => 'fas fa-chalkboard-teacher',
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

		$data['getListaAulas'] = $this->Aulas_model->getListaAulas();

		$this->load->view('layout/header', $data);
		$this->load->view('aulas/index');
		$this->load->view('layout/footer');

	}

    public function core($id = null)
	{
		$data = array(
			'titulo' => 'Utrial | Aulas',
			'icone_view' => 'fas fa-chalkboard-teacher',
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
			$info['aula'] = $this->Aulas_model->get_by_id($id);
		}

		$this->load->view('layout/header', $data);
		$this->load->view('aulas/core', $info);
		$this->load->view('layout/footer');

	}

	    public function adicionarAulas ($id = null)
	{
		$data = array(
			'titulo' => 'Utrial | Aulas',
			'icone_view' => 'fas fa-chalkboard-teacher',
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

		$cursos = $this->Cursos_model->listaCursoNomeID();
			$options = array();

			foreach($cursos as $curso) {
				$options[$curso->id] = $curso->nome;
			}

		$data['listaCursoNomeID'] = $options;

		// var_dump($data['listaCursoNomeID']);

		$this->load->view('layout/header', $data);
		$this->load->view('aulas/adicionarAulas', $data);
		$this->load->view('layout/footer');

	}

	public function deletar($id) {
        if ($this->Aulas_model->deletar($id)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'erro']);
        }
	}

	public function adicionar() {
		// var_dump($this->input->post());

		//form_validation
		$rules = [
            [
                'field' => 'curso_id',
                'label' => 'Curso ID',
                'rules' => 'required',
                'errors' => ['required' => 'A descrição não pode estar em branco.']
            ],
            [
                'field' => 'titulo',
                'label' => 'Título',
                'rules' => 'required',
                'errors' => ['required' => 'O Título não pode estar em branco.']
            ],
            [
                'field' => 'descricao',
                'label' => 'Descrição',
                'rules' => 'required',
                'errors' => ['required' => 'A Descrição não pode estar em branco.']
            ],
            [
                'field' => 'video_url',
                'label' => 'URL do vídeo',
                'rules' => 'required',
                'errors' => ['required' => 'A URL do video não pode estar em branco.']
            ]
        ];
        $this->form_validation->set_rules($rules);
        $this->form_validation->set_error_delimiters('<div><b style="margin-right: 8px;">Atenção!</b>', '</div>');
		$dados = $this->input->post();

		$this->Aulas_model->insert($dados);
	}
}
