<?php
namespace src\controllers;

use \core\Controller;

class CadastroController extends Controller {

    public function tpequip() {
        $this->render('cad_tp_equipamento');
    }

    public function setor() {
        $this->render('cad_setor');
    }

}