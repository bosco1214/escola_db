<?php

namespace app\controllers;

use \app\core\Pages;
use \app\models\EnturmarMd;

class Enturmar extends Pages{

    public function index(){
        self::render('enturmar/enturmar');
    }


    public function enturmarAluno(){
        $dados = array();
        $dados = EnturmarMd::getDadosAluno();
        self::render('enturmar/enturmar-aluno', $dados);
    }

    public function gravarEnturmar(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            EnturmarMd::enviarDados($_POST['txtAluno']);
            echo '<script>alert("Registro gravado com sucesso!");</script>';
            echo '<script>location.href=" ' . URL . '/enturmar/enturmarAluno/ "</script>';
        } catch (\Exception $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href=" ' . URL . '/enturmar/enturmarAluno/ "</script>';
        }    
    }

}
