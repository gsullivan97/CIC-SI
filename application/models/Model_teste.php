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
    
    public function Insere_Cadastro_Cargos($nome, $CBO, $formacaoDes, $formacaoMin,$cargaHr,$salario,$tipo,$descricao,$beneficio)
    {
        //criar variaveis no banco de acordo com o nome do indice do vetor data 
        //EX: Tabela:tbl_Cargos atributos: nome, CBO, tipo, descricao;
        $data = array(
            'nome' => $nome,
            'CBO' => $CBO,
            'formacao_desejada' => $formacaoDes,
            'formacao_minima' => $formacaoMin,
            'carga_horaria' => $cargaHr,
            'salario' => $salario,
            'tipo' => $tipo,
            'descricao' => $descricao,
            'transporte' => $beneficio['transporte'],
            'alimentacao' => $beneficio['alimentacao'],
            'odontologico' => $beneficio['odontologico'],
            'saude' => $beneficio['saude'],
        );
        //printf("Cheguei aqui <br>");
        //var_dump($data);
        
        //descomentar depois de configurado o banco
        $this->db->insert('tbl_Cargos', $data);
    }
    
    public function Insere_Cadastro_Empresa($razaoSocial,$nomeFantasia,$naturezaJuridica,$telefone,$rua,$numero,$cep,$bairro,$complemento,$municipio,$unidadeFederal,$id_cnae,$id_departamento,$id_setor,$id_centro_de_custo,$id_grupo_empresa,$cnpj,$message)
    {
        $data=array('razaoSocial'=>$razaoSocial,'nomeFantasia'=>$nomeFantasia,'naturezaJuridica'=>$naturezaJuridica,'telefone'=>$telefone,
            'rua'=>$rua,'numero'=>$numero,'cep'=>$cep,'bairro'=>$bairro,'complemento'=>$complemento,'municipio'=>$municipio,
            'unidadeFederal'=>$unidadeFederal,'id_cnae'=>$id_cnae,'id_departamento'=>$id_departamento,'id_setor'=>$id_setor,
            'id_centro_de_custo'=>$id_centro_de_custo,'id_grupo_empresa'=>$id_grupo_empresa,'cnpj'=>$cnpj,'message'=>$message);
        
        var_dump($data);
        $this->db->insert('tbl_Empresa',$data);
    }


    public function Insere_Cadastro_Setor($nome, $departamento){
        //tbl_setor(id,nome,departamento)

        $data['nome'] = $nome;
        $data['departamento'] = $departamento;

        //die(var_dump($data));

        $this->db->insert('tbl_setor', $data);
    }

    public function Insere_Cadastro_CNAE($codigo, $descricao){
        //tbl_cnae(id,codigo,descricao)

        $data['codigo'] = $codigo;
        $data['descricao'] = $descricao;

        //die(var_dump($data));       

        $this->db->insert('tbl_cnae', $data);
    }

    public function Insere_Cadastro_Departamento($id_secao, $nome){
        //tbl_departamento(id,id_secao,nome)

        $data['id_secao'] = $id_secao;
        $data['nome'] = $nome;

        //die(var_dump($data));       

        $this->db->insert('tbl_departamento', $data);   
    }

    public function Insere_Cadastro_Grupo_Empresa($descricao){
        //tbl_grupo_empresa(id,descricao)

        $data = array(
            'descricao' => $descricao,
        );
        return $this->db->insert('grupo_empresa', $data);   
    }
    
    public function Insere_Centro_Custo($codigo, $descricao)
    {
        $data = array(
            'codigo' => $codigo,
            'descricao' => $descricao,
        );
        return $this->db->insert('centro_custo', $data);
    }
}