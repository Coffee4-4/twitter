<?php

namespace App\Controllers;

class IndexController{

    public function index(){
        $dados = ['cama','mesa','banho'];
        
        require_once "../App/Views/index/index.phtml";
    }

    public function sobreNos(){
        require_once "../App/Views/index/sobreNos.phtml";
    }

}