<?php if (! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Alunos_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->utrial = $this->load->database('default', true);
    }

    public function getListaAlunos(){

        return $this->utrial->get('usuarios')->result_array();
    }

    public function insert($data){
        return $this->utrial->insert('usuarios', $data);
    }

    public function get_user_by_email($email){
        return $this->utrial->get_where('usuarios', ['email' => $email])->row();
    }

    public function get_by_id($id){
        return $this->utrial->get_where('usuarios', ['id' => $id])->row();
    }

    public function deletar($id){
        return $this->utrial->delete('usuarios', ['id' => $id]);
    }

}