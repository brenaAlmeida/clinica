<?php

namespace app\controllers;


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
}

