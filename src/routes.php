<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

/**
 * Rotas para Cadastro (view)
 */
$router->get('/cadastro/tpequip', 'CadastroController@tpequip');
$router->get('/cadastro/setor', 'CadastroController@setor');
$router->get('/cadastro/pessoa', 'CadastroController@pessoa');
$router->get('/cadastro/equipamento', 'CadastroController@equipamento');
/**
 * Rotas para actions
 */
$router->post('/cadastro/tpequip', 'CadastroController@tpequipAction');
$router->post('/cadastro/setor', 'CadastroController@setorAction');
$router->post('/cadastro/pessoa', 'CadastroController@pessoaAction');
$router->post('/cadastro/equipamento', 'CadastroController@equipamentoAction');