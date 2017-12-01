<?php

namespace app\controllers;


class CadastroController extends Controller {
    
    public function viewFunc() {
        echo $this->twig->render('cadastroFunc.html.twig', [
            
        ]);
    }
    
    public function viewClie() {
        echo $this->twig->render('cadastroCli.html.twig', [
            
        ]);
    }
    
}

