<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Setor;
use \src\models\Tipo_equipamento;
use \src\models\Pessoa;
use \src\models\Equipamentos;
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
        $data = Setor::select()->where('nome_setor', $nome)->execute();
        if(count($data) == 0){
            Setor::insert([
                'nome_setor' => $nome
            ])->execute();
            $this->render('sucessoCadastro');
        } else {
            $this->render('faliedCadastro');
        }
    }

    public function pessoaAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $setor = filter_input(INPUT_POST, 'setor');
        // Checa duplicidade
        $data = Pessoa::select()->where('nome', $nome)->execute();
        if(count($data) == 0){
            Pessoa::insert([
                'nome' => $nome,
                'telefone' => $telefone,
                'id_setor' => $setor
            ])->execute();
            $this->render('sucessoCadastro');
        } else {
            $this->render('faliedCadastro');
        }
    }

    public function equipamentoAction(){
        $descricao = filter_input(INPUT_POST, 'descricao');
        $serial = filter_input(INPUT_POST, 'serial');
        $tpequip = filter_input(INPUT_POST, 'tpequip');
        // Checa duplicidade
        $data = Equipamentos::select()->where('serial', $serial)->execute();
        if(count($data) == 0){
            Equipamentos::insert([
                'descricao' => $descricao,
                'serial' => $serial,
                'id_tipo' => $tpequip
            ])->execute();
            $this->render('sucessoCadastro');
        } else {
            $this->render('faliedCadastro');
        }
    }
}