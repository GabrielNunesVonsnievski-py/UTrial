<?php if (! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Cursos_model extends CI_Model{
    private $utrial;

    public function __construct()
    {
        parent::__construct();
        $this->utrial = $this->load->database('default', true);
    }

    public function getListaCursos(){

        $cursos = $this->utrial->get('cursos');
        return $cursos->result();
    }

    public function getCursoHTML() {
        $this->utrial->where('titulo' , 'HTML');
        $query = $this->utrial->get('aulas');
        return $query->result_array();
    }

    public function listaCursoNomeID(){
        $this->utrial->select('id');
        $this->utrial->select('nome');
        $query = $this->utrial->get('cursos');
        return $query->result();
    }

    public function get_by_id($id){
        return $this->utrial->get_where('cursos', ['id' => $id])->row();
    }
}