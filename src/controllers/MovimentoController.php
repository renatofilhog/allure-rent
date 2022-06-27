<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Setor;
use \src\models\Equipamentos;
class MovimentoController extends Controller {

    public function aluguel() {
        $setores = Setor::select()->execute();
        $equipamentos = Equipamentos::select()->where('disponivel',1)->execute();
        if(count($equipamentos) == 0){
            $equipamentos = [
                1 =>
                [
                    'id' => '-1',
                    'descricao' => 'Não há equipamentos disponíveis para aluguel']
            ];
        }
        $this->render('aluguel',[
            'setores' => $setores,
            'equipamentos' => $equipamentos
        ]);
    }

    public function aluguelAction(){
        
    }

}