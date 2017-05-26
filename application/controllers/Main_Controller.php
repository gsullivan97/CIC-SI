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
    }

    public function Cadastro_CNAE()
    {
        $this->render('Cadastro_CNAE','Template',3);
    }

    public function Cadastro_Grupo_Empresa()
    {
        $this->render('Cadastro_Grupo_Empresa','Template',3);
    }

    public function Centro_Custo()
    {
        $this->render('Centro_Custo','Template',3);
    }

    public function Cadastro_Setor()
    {
        $this->render('Cadastro_Setor','Template',3);
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
