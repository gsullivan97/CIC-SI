<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_teste extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function VerificaLogin($usuario,$senha)
    {
        $query = $this->db->query("select nome email permissao from tbl_usuario where email = '".$usuario."' and where senha = '".$senha."'");
        if($query->result() == null)
        {
            return false;
        }
        else
        {
            return $query->result();
        }
    }
    
    public function Insere_Cadastro_Cargos($nome,$CBO,$tipo,$descricao)
    {
        //criar variaveis no banco de acordo com o nome do indice do vetor data 
        //EX: Tabela:tbl_Cargos atributos: nome, CBO, tipo, descricao;
        
        $data = array(
        'nome' => $nome,
        'CBO' => $CBO,
        'tipo' => $tipo,
        'descricao' => $descricao,
        );
        //printf("Cheguei aqui <br>");
        print_r($data); 
        
        //descomentar depois de configurado o banco
        //$this->db->insert('tbl_Cargos', $data);
    }
}

