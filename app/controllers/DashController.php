<?php

namespace app\controllers;


class DashController extends Controller {
    
    public function view() {
        echo $this->twig->render('dash.html.twig', [
            
        ]);
    }
    
}

