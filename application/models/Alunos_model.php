<?php if (! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Alunos_model extends CI_Model{
    private $utrial;

    public function __construct()
    {
        parent::__construct();
        $this->utrial = $this->load->database('default', true);
    }
    
    public function getListaAlunos(){

        $sql = "SELECT id
                    ,nome
                    ,cpf
                    ,email
                    ,mensalidade_id
                FROM usuarios";

        $query = $this->utrial->query($sql);
        $retorno = $query->result_array();
        return $retorno;

    }
}