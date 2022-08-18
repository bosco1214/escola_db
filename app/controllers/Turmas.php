<?php

namespace app\controllers;

use \app\core\Pages;
use \app\models\TurmasMd;

class Turmas extends Pages {

    public function index(){
        //$dados = array();
        //$dados = TurmasMd::read();
        self::render('turmas/listar-turma-pag');
    }

    public function cadastrar(){
        self::render('turmas/cadastrar-turma');
    }

    public function gravarTurma(){
        try {
           TurmasMd::create($_POST);
           echo '<script>alert("Registro gravado com sucesso!");</script>';
           echo '<script>location.href=" ' . URL . '/turmas/index/ "</script>';
       } catch (\PDOException $e) {
           echo '<script>alert(" '.$e->getMessage().' ");</script>';
           echo '<script>location.href=" ' . URL . ' "</script>';
        }
    }

    public function editar(){
        $dados = array();
        $dados = TurmasMd::getRegistro($_GET);
        self::render('turmas/editar-turma', $dados);
    }

    public function excluir(){
        $dados = array();
        $dados = TurmasMd::getRegistro($_GET);
        self::render('turmas/excluir-turma', $dados);
    }

    public function alterar(){
        try {
           TurmasMd::update($_POST);
           echo '<script>alert("Registro gravado com sucesso!");</script>';
           echo '<script>location.href=" ' . URL . '/turmas/index/ "</script>';
       } catch (\PDOException $e) {
           echo '<script>alert(" '.$e->getMessage().' ");</script>';
           echo '<script>location.href=" ' . URL . ' "</script>';
        }
    }

    public function deletar(){
        try {
           TurmasMd::delete($_POST);
           echo '<script>alert("Registro deletado com sucesso!");</script>';
           echo '<script>location.href=" ' . URL . '/turmas/index/ "</script>';
       } catch (\PDOException $e) {
           echo '<script>alert(" '.$e->getMessage().' ");</script>';
           echo '<script>location.href=" ' . URL . ' "</script>';
        }
    }

    public function pesquisarTurmas(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            if(isset($_POST['anoletivo'])){
                $dados = array();
                $dados = TurmasMd::pesquisar($_POST);
            }
            self::render('turmas/listar-turma', $dados);
        } catch (\PDOException $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href=" ' . URL . '/turmas/index/ "</script>';
        }
       
    }

    public function listar($anoletivo,$inicial,$limite){
        $dados = array();
        //$dados = TurmasMd::buscar($inicial,$limite);
        $dados = TurmasMd::buscar($anoletivo,$inicial,$limite);
        //self::render('turmas/listar-turma-pag', $dados);
        return $dados;
    }

    public function contarRegistro($ano){
        $dados = array();
        $dados = TurmasMd::contaRegistro($ano);
        return $dados;
    }

}
