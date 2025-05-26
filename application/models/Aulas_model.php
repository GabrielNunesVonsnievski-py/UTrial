<?php if (! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Aulas_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->utrial = $this->load->database('default', true);
    }

    public function getListaAulas(){

        return $this->utrial->get('aulas')->result_array();
    }

    public function insert($data){
        return $this->utrial->insert('aulas', $data);
    }

    public function get_by_id($id){
        return $this->utrial->get_where('aulas', ['id' => $id])->row();
    }

    public function deletar($id){
        return $this->utrial->delete('aulas', ['id' => $id]);
    }

}