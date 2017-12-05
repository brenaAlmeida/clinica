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
     $app->get('/cliente', 'app\controllers\ClienteController:viewLogin')->setName('cliente-login');
     $app->get('/funcionario', 'app\controllers\FuncionarioController:viewLogin')->setName('funcionario-login');
     $app->get('/dash', 'app\controllers\DashController:view')->setName('dash');
     $app->get('/cadastro-fornecedor', 'app\controllers\FornecedorController:view')->setName('fornecedor');
     $app->get('/cadastro-funcionario', 'app\controllers\FuncionarioController:viewCadastroF')->setName('cadastro-funcionario');
     $app->get('/cadastro-cliente', 'app\controllers\FuncionarioController:viewCadastroC')->setName('cadastro-cliente');
     
     $app->post('/cadastro-funcionario', 'app\controllers\FuncionarioCOntroller:cadastrarFuncionario');
     $app->post('/cadastro-cliente', 'app\controllers\FuncionarioCOntroller:cadastrarCliente');