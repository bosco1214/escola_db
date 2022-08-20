<?php

namespace app\controllers;

use \app\core\Pages;
use \app\models\AlunosMd;

class Alunos extends Pages{

    public function cadastrar(){
        self::render('alunos/cadastrar-aluno');
    }

    public function pesquisarAluno(){
        self::render('alunos/pesquisar-aluno');
    }

    public function dadosAluno(){
        $dados = array();
        $dados = AlunosMd::getLastId();
        self::render('alunos/dados-aluno-1',$dados);
    }

    public function dadosAluno2(){
        self::render('alunos/dados-aluno-2');
    }

    public function gravarCadastro(){
       try {
        AlunosMd::create($_POST);
        echo '<script>alert("Registro gravado com sucesso!");</script>';
        echo '<script>location.href=" ' . URL . '/alunos/dadosAluno/ "</script>';
        } catch (\PDOException $e) {
        echo '<script>alert(" '.$e->getMessage().' ");</script>';
        echo '<script>location.href=" ' . URL . '/alunos/cadastrar/ "</script>';
        }
    }

    public function gravarDados(){
        try {
        AlunosMd::addData($_POST);
        $dados = array();
        $dados = AlunosMd::read();
        echo '<script>alert("Registro gravado com sucesso!");</script>';
        self::render('alunos/dados-aluno-2', $dados);
        } catch (\PDOException $e) {
        echo '<script>alert(" '.$e->getMessage().' ");</script>';
        echo '<script>location.href=" ' . URL . '/alunos/dadosAluno/ "</script>';
        }
    }

    public function gravarVincular(){
        try {
            AlunosMd::vincular($_POST);
            echo '<script>alert("Registro gravado com sucesso!");</script>';
            echo '<script>location.href=" ' . URL . ' "</script>';
            } catch (\PDOException $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/dadosAluno2/ "</script>';
            }
    }

    public function pesquisar($params){
        try {
            $dados = array();
            $dados = AlunosMd::search($params);
            return $dados;
        } catch (\PDOException $e) {
            //echo "Error: " . $e->getMessage();
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/pesquisarAluno/ "</script>';
        }
        
    }

    public function edit(){
        $id = base64_decode(filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $table = 'alunos';
        $dados = array();
        $dados = AlunosMd::getId($id,$table);
        self::render('alunos/editar-cadastro', $dados);
    }

    public function editDados(){
        $id = base64_decode(filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $table = 'dados_aluno';
        $dados = array();
        $dados = AlunosMd::getIdAluno($id,$table);
        self::render('alunos/editar-dados', $dados);
    }

    public function editVinculo(){
        $id = base64_decode(filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS));
        //echo "<pre>"; print_r($id); echo "</pre>"; exit;
        $table = 'situacao_escolar';
        $dados = array();
        $dados = AlunosMd::getIdAluno($id,$table);
        self::render('alunos/editar-vinculo', $dados);
    }

    public function delCadastro(){
        $id = base64_decode(filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS));
        //echo "<pre>"; print_r($id); echo "</pre>"; exit;
        $table = 'alunos';
        $dados = array();
        $dados = AlunosMd::getId($id,$table);
        self::render('alunos/deletar-cadastro', $dados);
    }

    public function editarCad(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            AlunosMd::updateCad($_POST);
            echo '<script>alert("Registro alterado com sucesso!");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/pesquisarAluno/ "</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/pesquisarAluno/ "</script>';
        }
    }

    public function editarDados(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            AlunosMd::updateDados($_POST);
            echo '<script>alert("Registro alterado com sucesso!");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/pesquisarAluno/ "</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/pesquisarAluno/ "</script>';
        }
    }

    public function editarVincular(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            AlunosMd::updateVinculo($_POST);
            echo '<script>alert("Registro alterado com sucesso!");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/pesquisarAluno/ "</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/pesquisarAluno/ "</script>';
        }
    }

    public function readTurma(){
        $dados = array();
        $dados = AlunosMd::read();
        return $dados;
    }

    public function deletarRegistro(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            AlunosMd::deleteCad($_POST);
            echo '<script>alert("Registro deletado com sucesso!");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/pesquisarAluno/ "</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href=" ' . URL . '/alunos/pesquisarAluno/ "</script>';
        }
    }


}
