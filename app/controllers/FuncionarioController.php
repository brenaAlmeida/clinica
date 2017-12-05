<?php

namespace app\controllers;

use app\models\Employees;
use app\models\Customers;

class FuncionarioController extends Controller {
    
    public function viewLogin() {
        echo $this->twig->render('loginFuncionario.html.twig', []);
    }
    
    public function viewCadastroF() {
        echo $this->twig->render('cadastroFuncionario.html.twig', []);
    }
    
    public function viewCadastroC() {
        echo $this->twig->render('cadastroCliente.html.twig', []);
    }
    
    public function cadastrarFuncionario() {
        $datas = $this->request->getParsedBody();
        
        if(!empty($datas)) {
            $cadastrar = Employees::cadastrar($datas);
            
            if($cadastrar->status === false) {
                echo $this->twig->render('cadastroFuncionario.html.twig', [
                    'errors' => $cadastrar->errors
                ]);
            } else {
                $this->router->redirectTo('dash', []);
            }
        }
    }
    
    public function cadastrarCliente() {
        $datas = $this->request->getParsedBody();
        
        if(!empty($datas)) {
            $cadastrar = Customers::cadastrar($datas);
            
            if($cadastrar->status === false) {
                echo $this->twig->render('cadastroCliente.html.twig', [
                    'errors' => $cadastrar->errors
                ]);
                echo "<pre>";
                var_dump($cadastrar->errors);
                echo "</pre>";
            } else {
                $this->router->redirectTo('dash', []);
            }
        }
    }
}

