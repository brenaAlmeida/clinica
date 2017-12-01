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
     $app->get('/cliente', 'app\controllers\ClienteController:view')->setName('cliente');
     $app->get('/funcionario', 'app\controllers\FuncionarioController:view')->setName('funcionario');
     $app->get('/dash', 'app\controllers\DashController:view')->setName('dash');
     $app->get('/fornecedor', 'app\controllers\FornecedorController:view')->setName('fornecedor');
     $app->get('/cadastro-funcionario', 'app\controllers\CadastroController:viewFunc')->setName('cadastro-funcionario');
     $app->get('/cadastro-cliente', 'app\controllers\CadastroController:viewClie')->setName('cadastro-cliente');
     
