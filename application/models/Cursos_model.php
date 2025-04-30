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
}