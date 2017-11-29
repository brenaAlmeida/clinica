<?php

namespace app\controllers;


class CadastroController extends Controller {
    
    public function view() {
        echo $this->twig->render('cadastro.html.twig', [
            
        ]);
    }
    
}


