<?php

namespace app\controllers;

use app\core\Pages;
use app\models\EnturmarMd;

class Consultas extends Pages{

    public function index(){
       $dados = EnturmarMd::getTurmas();
       self::render('consultas/consultar-turmas', $dados);
    }

    public function consultar($id){
       $dados = EnturmarMd::getEnturmacao($id);
       return $dados;
    }
}
