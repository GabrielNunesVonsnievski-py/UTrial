<?php if (! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Cursos_model extends CI_Model{
    private $utrial;

    public function __construct()
    {
        parent::__construct();
        $this->utrial = $this->load->database('default', true);
    }
    
    public function getListaCursos(){

        $preco = $this->utrial->get('valor');
        $duracao = $this->utrial->get('duracao');
        
        return $title->result();
    }
}