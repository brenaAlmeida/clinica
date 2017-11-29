<?php

namespace app\controllers;


class HomeController extends Controller {
    
    public function view() {
        echo $this->twig->render('home.html.twig', [
            
        ]);
    }
    
}

