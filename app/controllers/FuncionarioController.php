<?php

namespace app\controllers;


class FuncionarioController extends Controller {
    
    public function view() {
        echo $this->twig->render('funcionario.html.twig', [
            
        ]);
    }
    
}

