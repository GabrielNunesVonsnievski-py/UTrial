<?php if (! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Alunos_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->utrial = $this->load->database('default', true);
    }

    public function getListaAlunos(){

    $alunos = $this->utrial->get('usuarios');
    return $alunos->result();

    }
}