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
        $this->data['cargos_salarios'] = $this->Model_teste->Seleciona_Pessoa();
        //var_dump($data['cargos_salarios']);
        $this->render('Cargos_Salarios','Template',2);
    }
    
    public function Editar_CargosSalarios()
    {
        $this->data['cargo_salario'] = $this->Model_teste->Seleciona_Pessoa($this->input->post('codigo'));
        //var_dump($this->data['cargo_salario']);
        $this->render('Editar_CargosSalarios','Template',3);
    }
    
    public function Atualiza_CargosSalarios()
    {
        $codigo=$this->input->post('codigo');
        $nome=$this->input->post('nome');
        $cargo=$this->input->post('cargo');
        $idade=$this->input->post('idade');
        $dataadm=$this->input->post('dataadm');
        $salario=$this->input->post('salario');
        
        //var_dump($codigo,$nome,$cargo,$idade,$dataadm,$salario);
        $this->Model_teste->Altera_CargosSalarios($codigo,$nome,$cargo,$idade,$dataadm,$salario);
        $this->Menssagem('Atualizado com sucesso', 'success');
        $this->index();
    }
    
    public function Cadastro_Cargos()
    {
        $this->render('Cadastro_Cargos','Template',3);
        
        $nome=$this->input->post('fullname');
        $CBO=$this->input->post('cbo');
        $formacaoDes=$this->input->post('formacaoDes');
        $formacaoMin=$this->input->post('formacaoMin');
        $cargaHr=$this->input->post('cargaHr');
        $salario=$this->input->post('salario');
        $tipo=$this->input->post('tipo');
        $descricao=$this->input->post('descricao');
        
        $beneficio=array('transporte'=>$this->input->post('transporte'),'alimentacao'=>$this->input->post('alimentacao'),
                         'odontologico'=>$this->input->post('odontologico'),'saude'=>$this->input->post('saude'));
        //var_dump($beneficio);
        //teste de post para chegada de variaveis
        //printf($nome."  ".$CBO."  ".$tipo." ".$descricao);
        
        //sera modificado para uma verificação atraves de um isset depois
        if (isset($nome, $CBO, $formacaoDes, $formacaoMin,$cargaHr,$salario,$tipo,$descricao,$beneficio))
        {
            printf('estou funcionando');
            $this->Model_teste->Insere_Cadastro_Cargos($nome, $CBO, $formacaoDes, $formacaoMin,$cargaHr,$salario,$tipo,$descricao,$beneficio);
        }
    }

    public function Cadastro_CNAE()
    {
        $this->render('Cadastro_CNAE','Template',3);

        $codigo = $this->input->post('codigo');
        $descricao = $this->input->post('message');

        if (isset($codigo, $descricao))
        {
	        //printf('Cadastro_CNAE funcionou!');
            $this->Model_teste->Insere_Cadastro_CNAE($codigo, $descricao);
        }
    }

    public function Cadastro_EPI()
    {
        $this->render('Cadastro_EPI', 'Template', 3);
	
	$descricao = $this->input->post('descricao');
        $finalidade = $this->input->post('finalidade');
	$data_de_validade = $this->input->post('data_de_validade');
	$data_de_cadastro = $this->input->post('data_de_cadastro');
	$n_do_certificado = $this->input->post('n_do_certificado');
	
	if (isset($descricao, $finalidade, $data_de_validade, $data_de_cadastro, $n_do_certificado))
        {
	    //printf('Cadastro_EPI funcionou!');
            $this->Model_teste->Insere_Cadastro_EPI($descricao, $finalidade, $data_de_validade, $data_de_cadastro, $n_do_certificado);
        }
    }

    public function Cadastro_Empresa()
    {
        $this->render('Cadastro_Empresa','Template',3);
        
        $razaoSocial=$this->input->post('razao_social');
        $nomeFantasia=$this->input->post('nome_fantasia');//naturezaJuridica
        $naturezaJuridica=$this->input->post('natureza_juridica');//naturezaJuridica
        $cnpj=$this->input->post('cnpj');
        $rua=$this->input->post('rua');
        $numero=$this->input->post('numero');
        $cep=$this->input->post('cep');
        $bairro=$this->input->post('bairro');
        $municipio=$this->input->post('municipio');
        $unidadeFederal=$this->input->post('uf');
        $complemento=$this->input->post('complemento');
        $telefone=$this->input->post('telefone');//telefone
		$id_cnae=$this->input->post('id_cnae');
		$id_centro_de_custo=$this->input->post('id_centro_custo');
        $id_departamento=$this->input->post('id_departamento');
        $id_setor=$this->input->post('id_setor');
   		$id_grupo_empresa=$this->input->post('id_grupo_empresa');
		$message=$this->input->post('message');
        
        if (isset($razaoSocial,$nomeFantasia,$naturezaJuridica,$telefone,$rua,$numero,$cep,$bairro,$complemento,
            $municipio,$unidadeFederal,$id_cnae,$id_departamento,$id_setor,$id_centro_de_custo,$id_grupo_empresa,$cnpj,$message))
        {
	    printf('Cadastro_Grupo_Empresa funcionou!');
            $this->Model_teste->Insere_Cadastro_Empresa($razaoSocial,$nomeFantasia,$naturezaJuridica,$telefone,$rua,$numero,$cep,$bairro,$complemento,
            $municipio,$unidadeFederal,$id_cnae,$id_departamento,$id_setor,$id_centro_de_custo,$id_grupo_empresa,$cnpj,$message);
        }
    }

    public function Cadastro_Curriculo()
    {
        $this->render('Cadastro_Curriculo','Template',3);
    }

    public function Cadastro_Grupo_Empresa()
    {
        $descricao = $this->input->post('descricao');

        if (isset($descricao)) {
            $insert = $this->Model_teste->Insere_Cadastro_Grupo_Empresa($descricao);
            $this->data['grupoEmpresa']['insert'] = $insert;
        }
        $this->render('Cadastro_Grupo_Empresa', 'Template', 3);
    }

    public function Centro_Custo()
    {
        $codigo = $this->input->post('codigo');
        if (!empty($codigo)) {
            $descricao = $this->input->post('descricao');
            $insert = $this->Model_teste->Insere_Centro_Custo($codigo, $descricao);
            $this->data['centroCusto']['insert'] = $insert;
        }
        
        $this->render('Centro_Custo', 'Template', 3);
    }

    public function Cadastro_Setor()
    {
        $this->render('Cadastro_Setor','Template',3);

        $nome = $this->input->post('fullname');
        $departamento = $this->input->post('departamento');

        if(!empty($nome) && !empty($departamento)):
            $this->Model_teste->Insere_Cadastro_Setor($nome,$departamento);
        endif;
    }    

    public function Cadastro_Departamento()
    {
        $this->render('Cadastro_Departamento','Template',3);

        $id_secao = $this->input->post('id_secao');
        $nome = $this->input->post('nome');

        if (isset($id_secao, $nome))
        {
	        //printf('Cadastro_Departamento funcionou!');
            $this->Model_teste->Insere_Cadastro_Departamento($id_secao, $nome);
        }
    }  

    public function Cadastro_PCMSO()
    {
    	$this->render('Cadastro_PCMSO', 'Template', 3);

        $tipoexame = $this->input->post('tipoexame');
        $finexames = $this->input->post('finexames');

        if(!empty($tipoexame) && !empty($finexames)):
            $this->Model_teste->Insere_Cadastro_PCMSO($tipoexame,$finexames);
        endif;
    }

    public function Cadastro_Unidades_Extintoras()
    {
        $this->render('Cadastro_Unidades_Extintoras', 'Template', 3);
	
	$id = $this->input->post('id');
        $message = $this->input->post('message');
	$finalidadeUso = $this->input->post('finalidadeUso');
	$numCert = $this->input->post('numCert');
	$localInst = $this->input->post('localInst');
	$dataCadastro = $this->input->post('dataCadastro');
	$validade = $this->input->post('validade');
	
	if (isset($id, $message, $finalidadeUso, $numCert, $localInst, $dataCadastro, $validade))
        {
	    //printf('Cadastro_Unidades_Extintoras funcionou!');
            $this->Model_teste->Insere_Cadastro_Unidades_Extintoras($id, $message, $finalidadeUso, $numCert, $localInst, $dataCadastro, $validade);
        }
    }

    public function Cadastro_Funcionario()
    {
        $this->render('Cadastro_Funcionario','Template',3);
    }

    public function Cadastro_Beneficios(){
        $this->render('Cadastro_Beneficios', 'Template', 3);
    }

    public function Altera_Status_Pessoa()
    {
        $this->data['alteraPessoa'] = $this->Model_teste->Seleciona_Pessoa($this->input->post('codigo'));
        //var_dump($this->data['alteraPessoa']);
        $this->render('Altera_Status_Pessoa', 'Template', 3);
    }
    
    public function Altera_Status()
    {
        $codigo= $this->input->post('codigo');
        $nome= $this->input->post('nome');
        $status= $this->input->post('status');
        
        $cargo=$this->input->post('cargo');
        $dataAdm=$this->input->post('dataAdm');
        $dataDem=$this->input->post('dataDem');
        $banco=$this->input->post('banco');
        $agencia=$this->input->post('agencia');
        $conta=$this->input->post('conta');
        
        $this->Model_teste->Altera_Pessoa($codigo,$nome,$status,$cargo,$dataAdm,$dataDem,$banco,$agencia,$conta);
        //var_dump($codigo,$nome,$status,$cargo,$dataAdm,$dataDem,$banco,$agencia,$conta);
        $this->Menssagem('Atualizado com sucesso', 'success');
        $this->index();
    }
    
    public function Cadastro_CAT(){
        $this->render('Cadastro_CAT', 'Template', 3);

        $carac = $this->input->post('carac');
        $dataabert = $this->input->post('dataabert');
        $registrocat = ($this->input->post('registrocat')) == 'on' ? 1 : 0;
        

        //print_r($registrocat);
        if(!empty($carac) && !empty($dataabert)):
            //die(var_dump($registrocat));
            $this->Model_teste->Insere_Cadastro_CAT($carac,$dataabert, $registrocat);
        endif;

    }

    public function Pesquisar_Pessoa()
    {
        $this->data['Pessoas'] = $this->Model_teste->Seleciona_Pessoa($this->input->post('codigo'));
        //var_dump($this->data['Pessoas']);
        $this->render('Pesquisar_Pessoa','Template',3);
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
    
    public function Menssagem($mensagem,$tipo)
    {
        $this->data['mensagem'] = $mensagem;
        $this->data['tipo'] = $tipo;
        $this->load->view('errors/login_error_teste',$this->data);
    }
    
    public function VereficaPermissao($nivelAcessoPagina)
    {
        if($this->session->userdata['User']==null)
        {
            $this->Login();
        }
        else if($this->session->userdata['User']['permissao']<$nivelAcessoPagina)
        {
                //teste
                //print_r($this->session->userdata['User']);
                //printf('Usuario não tem permissão');

            $this->Menssagem('Usuario não tem permissão!', 'warning');
            $this->index();
        }
        else
        {
            return true;
        }
    }

    public function render($the_view, $template, $nivelAcesso)
    {
        if($this->VereficaPermissao($nivelAcesso))
        {
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
                    //var_dump($this->data['Pessoas']);
                
                    $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);
                    $this->load->view($template.'/master_view', $this->data);
                }
            }
        }
    }
