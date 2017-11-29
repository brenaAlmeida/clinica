<?php

    /**
     * -------------------------------------------------------------------------
     * Web Routes
     * ------------------------------------------------- -----------------------
     *
     * Aqui é onde você registra todas as rotas da web para sua aplicação.
     * 
     */

     
     $app->get('/', 'app\controllers\HomeController:view')->setName('home');
     $app->get('/cadastro', 'app\controllers\CadastroController:view')->setName('cadastro');

