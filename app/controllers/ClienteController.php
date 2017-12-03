<?php

namespace app\controllers;


class ClienteController extends Controller {
    
    public function viewLogin() {
        echo $this->twig->render('cliente.html.twig', []);
    }
    
}

