<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}

    public function auth(){

        $identity = html_escape($this->input->post('email'));
        $password = html_escape($this->input->post('senha'));
        $remember = FALSE; //Lembrar do usuário
        if($this->ion_auth->login($identity, $password, $remember)){
            $usuario = $this->core_model->get_by_id('usuarios', array('email' => $identity));
            $this->session->set_flashdata('sucesso', 'Seja muito bem vindo(a) '. $usuario->first_name);
            redirect('/home');
        }else{
            $this->session->set_flashdata('error', 'E-mail ou senha incorretos!');
            redirect($this->router->fetch_class());

        }
    }

    public function logout(){
        $this->ion_auth->logout();
        redirect($this->router->fetch_class());

    }
}
