<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Setor;
use \src\models\Equipamentos;
use \src\models\Alugueis;

class BuscaController extends Controller {

    public function serialEquip($args){
        $data = Equipamentos::select()->where('id',$args['id'])->execute();
        print_r($data[0]['serial']);

    }
}