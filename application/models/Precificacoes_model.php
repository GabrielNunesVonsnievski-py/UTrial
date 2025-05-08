<?php if (! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Precificacoes_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->utrial = $this->load->database('default', true);
    }

    public function getListaPrecificacoes(){

        return $this->utrial->get('precificacao')->result_array();
    }

    public function insert($data){
        return $this->utrial->insert('precificacao', $data);
    }

    public function deletar($id){
        return $this->utrial->delete('precificacao', ['id' => $id]);
    }

}