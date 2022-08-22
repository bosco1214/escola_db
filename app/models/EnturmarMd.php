<?php

namespace app\models;

use \app\lib\database\Connection;

class EnturmarMd {

    public static function getDadosAluno(){

        $sql = "SELECT * FROM situacao_escolar WHERE aluno_enturmado = :aluno_enturmado";

        $con = Connection::getConnection();
        $query = $con->prepare($sql);
        $query->bindValue(':aluno_enturmado', "NAO");
        $query->execute();

        $count = $query->rowCount();

        if($count == 0){
            return false;
        }else{
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public static function getLastId(){

        $sql = "SELECT * FROM alunos ORDER BY id DESC";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->execute();
        $resultado = $query->fetch(\PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function enviarDados($dados=array()){      
        foreach ($dados as $row) {
            $id = $row['idaluno'];
            $tipoMat = $row['tipo_mat'];
            $tipoMov = $row['tipo_mov'];
            $aluno = self::getAluno($id);
            self::gravar($tipoMat,$tipoMov,$aluno);
        }        
    }

    private static function getAluno($id){

        $con = Connection::getConnection();

        $sql = "SELECT * FROM situacao_escolar WHERE idaluno = :idaluno AND aluno_enturmado = :idaluno_enturmado";

        $query = $con->prepare($sql);
        $query->bindValue(':idaluno', $id);
        $query->bindValue(':idaluno_enturmado', "NAO");
        $query->execute();
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $result; 
    }


    public static function gravar($tipoMat,$tipoMov,$dados= array()){
        $registro = array();
        $registro = $dados;
        foreach ($registro as $value) {
            $idaluno = $value['idaluno'];
            $nome = $value['nomedoaluno'];
            $idturma = $value['idturma'];
            $turma = $value['turma'];
            $situacao = $value['situacao'];
            $tipo_mat = $tipoMat;
            $tipo_mov = $tipoMov;      

        $con = Connection::getConnection();

        $sql = "INSERT INTO enturmacao (idaluno,nome,idturma,turma,numero,tipo_matricula,tipo_movimento,sit_atual,data_transf,data_matricula,anoletivo) VALUES (:idaluno,:nome,:idturma,:turma,:numero,:tipo_matricula,:tipo_movimento,:sit_atual,:data_transf,:data_matricula,:anoletivo)";

        $query = $con->prepare($sql);
        $query->bindValue(':idaluno', $idaluno);
        $query->bindValue(':nome', $nome);
        $query->bindValue(':idturma', $idturma);
        $query->bindValue(':turma', $turma);
        $query->bindValue(':numero', NULL);
        $query->bindValue(':tipo_matricula', $tipo_mat);
        $query->bindValue(':tipo_movimento', $tipo_mov);
        $query->bindValue(':sit_atual', $situacao);
        $query->bindValue(':data_transf', NULL);
        $query->bindValue(':data_matricula', date('Y-m-d'));
        $query->bindValue(':anoletivo', date('Y'));
        $query->execute();
        
        self::alteraEnturmaAluno($idaluno);
        
        }
        return true;
    }

    private static function alteraEnturmaAluno($idaluno){

        $sql = "UPDATE situacao_escolar SET aluno_enturmado = :aluno_enturmado WHERE idaluno = :idaluno";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':idaluno', $idaluno);
        $query->bindValue(':aluno_enturmado', "SIM");
        $query->execute();
    }
}
