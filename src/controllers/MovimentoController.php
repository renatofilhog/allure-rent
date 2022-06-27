<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Setor;
use \src\models\Equipamentos;
use \src\models\Alugueis;

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
        date_default_timezone_set('America/Fortaleza');
        $id_setor = filter_input(INPUT_POST,'setor');
        $id_equipamento = filter_input(INPUT_POST,'equipamento');
        $data_limite = date('Ymd', strtotime(filter_input(INPUT_POST,'data_limite')));
        $hora_limite = date('His',strtotime(filter_input(INPUT_POST,'hora_limite')));
        $data_aluguel = date('Ymd');
        $hora_aluguel = date('His');
        if($data_aluguel>$data_limite){
            $this->render('message',[
                'message'=>'Erro',
                'subMessage'=> 'Data de aluguel não pode ser maior que a data limite'
            ]);
            exit;
        } elseif($data_aluguel==$data_limite){
            if($hora_aluguel>$hora_limite){
                $this->render('message',[
                    'message'=>'Erro',
                    'subMessage'=> 'Hora da devolução não pode ser anterior a hora atual'
                ]);
                exit;
            }
        }
        if($id_equipamento == -1){
            $this->render('message',[
                'message'=>'Erro',
                'subMessage'=> 'Não há equipamentos disponíveis para Aluguel'
            ]);
            exit;
        }
        Alugueis::insert([
            'id_setor' => $id_setor,
            'id_equipamento' => $id_equipamento,
            'data_aluguel' => $data_aluguel,
            'hora_aluguel' => $hora_aluguel,
            'data_limite' => $data_limite,
            'hora_limite' => $hora_limite
        ])->execute();
        Equipamentos::update([
            'disponivel' => 0
        ])->where('id',$id_equipamento)->execute();

        $this->render('message',[
            'message'=>'Aluguel Realizado',
            'subMessage'=> 'Equipamento agora não constará para alugueis'
        ]);
    }

}