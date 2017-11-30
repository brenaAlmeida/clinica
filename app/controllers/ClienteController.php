<?php

namespace app\controllers;


class ClienteController extends Controller {
    
    public function view() {
        echo $this->twig->render('cliente.html.twig', [
            
        ]);
    }
    
}

