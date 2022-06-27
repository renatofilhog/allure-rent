<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Setor;
use \src\models\Tipo_equipamento;
class CadastroController extends Controller {

    public function tpequip() {
        $this->render('cad_tp_equipamento');
    }

    public function setor() {
        $this->render('cad_setor');
    }

    public function pessoa() {
        $data = Setor::select()->execute();
        $this->render('cad_pessoa', 
        [
            'setores' => $data
        ]);
    }

    public function equipamento(){
        $data = Tipo_equipamento::select()->execute();
        $this->render('cad_equipamento', 
        [
            'tpequip' => $data
        ]);
    }

    /**
     * Actions
     */
    public function tpequipAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $data = Tipo_equipamento::select()->where('nome_tipo', $nome)->execute();
        if(count($data) == 0){
            Tipo_equipamento::insert([
                'nome_tipo' => $nome
            ])->execute();
            $this->render('sucessoCadastro');
        } else {
            $this->render('faliedCadastro');
        }
    }

    public function setorAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $data = Tipo_equipamento::select()->where('nome_tipo', $nome)->execute();
        if(count($data) == 0){
            Tipo_equipamento::insert([
                'nome_tipo' => $nome
            ])->execute();
            $this->render('sucessoCadastro');
        } else {
            $this->render('faliedCadastro');
        }
    }

}