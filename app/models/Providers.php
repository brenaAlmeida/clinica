<?php

namespace app\models;


class Providers extends \ActiveRecord\Model {
    
    static $validates_presence_of = array(
        array(
            'denominacao_social',
            'message' => 'A denominação social é um campo obrigatório.'
        ),
        array(
            'endereco',
            'message' => 'O endereço é um campo obrigatório.'
        ),
        array(
            'bairro',
            'message' => 'O bairro é um campo obrigatório.'
        ),
        array(
            'cidade',
            'message' => 'A cidade é um campo obrigatório.'
        ),
        array(
            'uf',
            'message' => 'O uf é um campo obrigatório.'
        ),
        array(
            'telefone',
            'message' => 'O telefone é um campo obrigatório.'
        ),
        array(
            'cep',
            'message' => 'O cep é um campo obrigatório.'
        ),
        array(
            'email',
            'message' => 'O email é um campo obrigatório.'
        ),
        array(
            'cnpj',
            'message' => 'O cnpj é um campo obrigatório.'
        ),
        array(
            'inscricao',
            'message' => 'A inscrição é um campo obrigatório.'
        ),
        array(
            'ramo_atividade',
            'message' => 'O ramo de atividade é um campo obrigatório.'
        ),
        array(
            'contato',
            'message' => 'O contato é um campo obrigatório.'
        ),
    );
    
    static $validates_uniqueness_of = array(
        array(
            'email',
            'message' => 'Já existe um fornecedor com este e-mail cadastrado.'
        ),
        array(
            'cnpj',
            'message' => 'Já existe um fornecedor com este cnpj cadastrado.'
        ),
        array(
            'inscricao',
            'message' => 'Já existe um fornecedor com esta inscrição cadastrado.'
        )
    );
    
    public static function cadastrar(array $datas) {
        
        $userObj = new \stdClass;
        $userObj->user = null;
        $userObj->status = false;
        $userObj->errors = array();
        
        $cadastrar = self::create($datas);
        
        if($cadastrar->is_valid()) {
            $userObj->user = $cadastrar;
            $userObj->status = true;
            return $userObj;
        }
        
        $errors = $cadastrar->errors->get_raw_errors();
        
        foreach ($errors as $field => $message) {
            array_push($userObj->errors, $message[0]);
        }
        
        return $userObj;
        
    }
}

