<?php

namespace app\controllers;


class CadastroController extends Controller {
    
    public function viewFunc() {
        echo $this->twig->render('cadastroFunc.html.twig', [
            
        ]);
    }
    
}

