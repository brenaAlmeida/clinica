<?php

namespace app\controllers;

use app\models\Employees;

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
}

