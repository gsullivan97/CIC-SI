<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    protected $data = array();
    
    public function __construct() 
    {
        parent::__construct();

        // Load session library
        $this->load->library('session');
        $this->load->model('Model_teste');
        // descomentar linha depois que o banco for criado e as configurações setadas no database.php
        $this->load->database();
        error_reporting(0);
    }


    public function index()
    {   
        $this->render('MainPage','Template',2);
            //$this->load->view('Template/master_header_view');
    }
    
    public function Cadastro()
    {
        $this->render('Cadastro','Template',7);
    }
    
    public function Cargos_Salarios()
    {
        $this->render('Cargos_Salarios','Template',2);
    }
    
    public function Cadastro_Cargos()
    {
        $this->render('Cadastro_Cargos','Template',3);
        
        $nome=$this->input->post('nome');
        $CBO=$this->input->post('cbo');
        $tipo=$this->input->post('tipo');
        $descricao=$this->input->post('descricao');
        
        //teste de post para chegada de variaveis
        //printf($nome."  ".$CBO."  ".$tipo." ".$descricao);
        
        //sera modificado para uma verificação atraves de um isset depois
        if (isset($nome, $CBO, $tipo, $descricao))
        {
            printf('estou funcionando');
            $this->Model_teste->Insere_Cadastro_Cargos($nome, $CBO, $tipo, $descricao);
        }
    }

    public function Cadastro_CNAE()
    {
        $this->render('Cadastro_CNAE','Template',3);

        $codigo = $this->input->post('codigo');
        $descricao = $this->input->post('descricao');

        if (isset($codigo, $descricao))
        {
            $this->Model_teste->Insere_Cadastro_CNAE($codigo, $descricao);
        }
    }

    public function Cadastro_Empresa()
    {
        $this->render('Cadastro_Empresa','Template',3);
    }

    public function Cadastro_Grupo_Empresa()
    {
        $this->render('Cadastro_Grupo_Empresa','Template',3);

        $descricao = $this->input->post('descricao');

        if (isset($descricao))
        {
            $this->Model_teste->Insere_Cadastro_Grupo_Empresa($descricao);
        }
    }

    public function Centro_Custo()
    {
        $this->render('Centro_Custo','Template',3);
    }

    public function Cadastro_Setor()
    {
        $this->render('Cadastro_Setor','Template',3);
    }    

    public function Cadastro_Departamento()
    {
        $this->render('Cadastro_Departamento','Template',3);

        $id_secao = $this->input->post('id_secao');
        $nome = $this->input->post('nome');

        if (isset($id_secao, $nome))
        {
            $this->Model_teste->Insere_Cadastro_Departamento($id_secao, $nome);
        }
    }  

    public function Cadastro_Pessoa()
    {
        $this->render('Cadastro_Pessoa','Template',3);
    } 

    public function Editar_CargosSalarios()
    {
        $this->render('Editar_CargosSalarios','Template',3);
    }

    public function Login()
    {
        $this->load->view('Login');
    }
    
    public function Logout()
    {
        $this->session->sess_destroy();
        $this->load->view('Login');
    }
    
    public function VerificaUsuario()
    {
        $usuario = $this->input->post('Usuario');
        $senha = $this->input->post('Senha');
        
            //teste para saber se usuario e senha estão chegando
            //printf($usuario."  ".$senha);
        
            //simulação banco
            //info_User simula o que data recebera da pesquisa do banco na model
            //funcção onde verifica se o usuario está no banco
        $info_User = ["usuario"=>"zekken97", "nome"=>"Greg A. Sullivan", "permissao"=>7];
            //fim_simulação
        //$info_User = $this->Model_teste->VerificaLogin($usuario,$senha);
            //simulação do banco de desenvolvimento
            
            //fim simulação
        
            //caso o usuario não seja encontrado no banco ele ira retornar falso
            //o que resultara numa mensagem de erro
            //$this->session->set_userdata('User', false);
        
            //caso ele esteja no banco ele vai para a home page
        $this->session->set_userdata('User', $info_User);
        
        if($this->session->userdata['User'] == false)
        {
            $this->data['mensagem'] = "Usuario ou senha invalidos.";
            $this->load->view('errors/login_error_teste',$this->data);
            $this->Login();
        }
        else
        {
            $this->index();
        }
    }

    public function render($the_view, $template, $nivelAcesso)
    {
        if($this->session->userdata['User']==null)
        {
            $this->Login();
        }
        else if($this->session->userdata['User']['permissao']<$nivelAcesso)
        {
                //teste
                //print_r($this->session->userdata['User']);
                //printf('Usuario não tem permissão');

            $this->data['mensagem'] = "Usuario não tem permissão!";
            $this->load->view('errors/login_error_teste',$this->data);
            $this->index();
        }
        else
        {
                //teste
                //print_r($this->session->userdata['User']);

            if(is_null($template))
            {
                $this->load->view($the_view,$this->data);
            }
            else
            {
                    /*
                    $this->data['the_view_content'] = (is_null($the_view)) ? '' : $the_view;
                    $this->data['the_view_data'] = $this->data;
                    $this->data['the_view_true'] = TRUE;
                    */
                    $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);
                    $this->load->view($template.'/master_view', $this->data);
                }
            }
        }
    }
