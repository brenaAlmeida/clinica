<?php

namespace app\controllers;


class FornecedorController extends Controller {
    
    public function view() {
        echo $this->twig->render('cadastroFornecedor.html.twig', []);
    }
    
}

