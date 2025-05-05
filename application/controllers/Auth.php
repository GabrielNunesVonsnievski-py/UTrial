<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent:: __construct();
        $this->load->model('Alunos_model');
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

    public function register(){
        $data = [
            'nome' => $this->input->post('nome', TRUE),
            'CPF' => $this->input->post('CPF', TRUE),
            'email' => $this->input->post('email', TRUE),
            'telefone' => $this->input->post('telefone', TRUE),
            'senha' => password_hash($this->input->post('senha'), PASSWORD_DEFAULT),
            'mensalidade_id' => $this->input->post('mensalidade', TRUE)
        ];

        $this->Alunos_model->insert($data); //salva no banco

        redirect('Auth/login');

    }

    public function login(){
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');

        $user = $this->Alunos_model->get_user_by_email($email);

        if($user && password_verify($senha, $user->senha)){
            //login com sucesso

            $this->session->set_userdata([
                'id' =>$user->id,
                'nome' =>$user->id,
                'logado' =>TRUE
            ]);
            redirect('home'); //redirecionar para a pagina home
        }else {
            //falha ao logar
            $this->session->set_flashdata('erro', 'Email ou senha inválidos');
            redirect('login');
        }
    }

    public function logout(){
        $this->ion_auth->logout();
        redirect($this->router->fetch_class());

    }
}
