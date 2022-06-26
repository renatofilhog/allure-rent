<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
/**
 * Rotas para Cadastro
 */
$router->get('/cadastro/tpequip', 'CadastroController@tpequip');
$router->get('/cadastro/setor', 'CadastroController@setor');