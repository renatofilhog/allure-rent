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
    
    public function pendentes(){
        $Apendentes = Alugueis::select()->where('devolvido',0)->execute();
        $data = [];
        foreach($Apendentes as $item){
            $equipamento = Equipamentos::select()->where('id',$item['id_equipamento'])->execute();
            $setor = Setor::select()->where('id',$item['id_setor'])->execute();
            $data_aluguel = date('d/m/Y', strtotime($item['data_aluguel']));
            $hora_aluguel = date('H:i:s', strtotime($item['hora_aluguel']));
            $data_limite = date('d/m/Y', strtotime($item['data_limite']));
            $hora_limite = date('H:i:s', strtotime($item['hora_limite']));
            
            $dataCompAluguel = $data_aluguel." - ".$hora_aluguel;
            $dataCompLimite = $data_limite." - ".$hora_limite;
            
            $data[] = [
                'equipamento' => $equipamento[0]['descricao'],
                'serial' => $equipamento[0]['serial'],
                'pessoa' => 'Responsável',
                'setor' => $setor[0]['nome_setor'],
                'data_aluguel' => $dataCompAluguel,
                'data_limite' => $dataCompLimite
            ];
        }
        
        $this->render('pendentes',['alugueis' => $data]);
    }
}