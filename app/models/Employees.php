<?php

namespace app\models;


class Employees extends \ActiveRecord\Model {
    
    static $validates_presence_of = array(
        array(
            'nome',
            'message' => 'O nome é um campo obrigatório.'
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
            'data_admissao',
            'message' => 'A data de admissão é um campo obrigatório.'
        ),
        array(
            'cargo',
            'message' => 'O cargo é um campo obrigatório.'
        ),
        array(
            'email',
            'message' => 'O email é um campo obrigatório.'
        ),
        array(
            'senha',
            'message' => 'A senha é um campo obrigatório.'
        ),
    );
    
    static $validates_uniqueness_of = array(
        array(
            'email',
            'message' => 'Já existe um usuário com este e-mail cadastrado.'
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

