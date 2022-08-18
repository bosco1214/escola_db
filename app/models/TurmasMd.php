<?php

namespace app\models;

use \app\lib\database\Connection;

class TurmasMd {

    public static function create(){

        $nome = mb_strtoupper(filter_input(INPUT_POST, 'turma', FILTER_SANITIZE_SPECIAL_CHARS ));
        $turno = mb_strtoupper(filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_SPECIAL_CHARS ));
        $nivel = mb_strtoupper(filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_SPECIAL_CHARS ));
        $etapa = mb_strtoupper(filter_input(INPUT_POST, 'etapa', FILTER_SANITIZE_SPECIAL_CHARS ));
        $modalidade = mb_strtoupper(filter_input(INPUT_POST, 'modalidade', FILTER_SANITIZE_SPECIAL_CHARS ));
        $hora_inicio = filter_input(INPUT_POST, 'hora_inicio', FILTER_SANITIZE_SPECIAL_CHARS );
        $hora_termino = filter_input(INPUT_POST, 'hora_termino', FILTER_SANITIZE_SPECIAL_CHARS );
        $anoletivo = date('Y');
        $data = date('Y-m-d');

        $sql = "INSERT INTO turmas (nome, turno, nivel, etapa, modalidade, hora_inicio, hora_termino, anoletivo, data) VALUES (:nome, :turno, :nivel, :etapa, :modalidade, :hora_inicio, :hora_termino, :anoletivo, :data)";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':nome', $nome);
        $query->bindValue(':turno', $turno);
        $query->bindValue(':nivel', $nivel);
        $query->bindValue(':etapa', $etapa);
        $query->bindValue(':modalidade', $modalidade);
        $query->bindValue(':hora_inicio', $hora_inicio);
        $query->bindValue(':hora_termino', $hora_termino);
        $query->bindValue(':anoletivo', $anoletivo);
        $query->bindValue(':data', $data);
        $res = $query->execute();

        if(!$res){
            throw new \PDOException("Falha na gravação");
            return false;
        }else{
            return true;
        }
    }

    public static function read(){

        $anoletivo = date('Y');

        $sql = "SELECT * FROM turmas WHERE anoletivo = :anoletivo ORDER BY nome";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':anoletivo', $anoletivo);
        $res = $query->execute();

        //$count = $query->rowCount();

        if(!$res){
            throw new \PDOException("Registros não encontrados!");
            return false;
        } else {
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }

    }

    public static function getRegistro(){

        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS ));

        $sql = "SELECT * FROM turmas WHERE id = :id";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();

        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;

    }

    public static function update(){

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = mb_strtoupper(filter_input(INPUT_POST, 'turma', FILTER_SANITIZE_SPECIAL_CHARS ));
        $turno = mb_strtoupper(filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_SPECIAL_CHARS ));
        $nivel = mb_strtoupper(filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_SPECIAL_CHARS ));
        $etapa = mb_strtoupper(filter_input(INPUT_POST, 'etapa', FILTER_SANITIZE_SPECIAL_CHARS ));
        $modalidade = mb_strtoupper(filter_input(INPUT_POST, 'modalidade', FILTER_SANITIZE_SPECIAL_CHARS ));
        $hora_inicio = filter_input(INPUT_POST, 'hora_inicio', FILTER_SANITIZE_SPECIAL_CHARS );
        $hora_termino = filter_input(INPUT_POST, 'hora_termino', FILTER_SANITIZE_SPECIAL_CHARS );
        $anoletivo = date('Y');
        $data = date('Y-m-d');

        $sql = "UPDATE turmas SET nome = :nome, turno = :turno, nivel = :nivel, etapa = :etapa, modalidade = :modalidade, hora_inicio = :hora_inicio, hora_termino = :hora_termino, anoletivo = :anoletivo, data = :data WHERE id = :id";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':nome', $nome);
        $query->bindValue(':turno', $turno);
        $query->bindValue(':nivel', $nivel);
        $query->bindValue(':etapa', $etapa);
        $query->bindValue(':modalidade', $modalidade);
        $query->bindValue(':hora_inicio', $hora_inicio);
        $query->bindValue(':hora_termino', $hora_termino);
        $query->bindValue(':anoletivo', $anoletivo);
        $query->bindValue(':data', $data);
        $query->bindValue(':id', $id);
        $res = $query->execute();

        if(!$res){
            throw new \PDOException("Falha na gravação");
            return false;
        }else{
            return true;
        }
    }

    public static function delete(){

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $sql = "DELETE FROM turmas WHERE id = :id";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $res = $query->execute();

        if($res == false){
            throw new \PDOException("Falha na gravação");
            return false;
        }else{
            return true;
        }

    }

    public static function pesquisar(){
        $anoletivo = filter_input(INPUT_POST, 'anoletivo', FILTER_SANITIZE_SPECIAL_CHARS);
        //echo "<pre>"; print_r($anoletivo); echo "</pre>"; exit;
        $sql = "SELECT * FROM turmas WHERE anoletivo = :anoletivo ORDER BY nome";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':anoletivo', $anoletivo);
        $res = $query->execute();

        //$count = $query->rowCount();

        if(!$res){
            throw new \PDOException("Registros não encontrados!");
            return false;
        } else {
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }

    }
    /*
    public static function buscar($inicial,$limite){

        $sql = "SELECT * FROM turmas LIMIT $inicial, $limite";

        $con = Connection::getConnection(); 
        $query = $con->prepare($sql);   
        $query->execute();   
        $dados = $query->fetchAll();
        return $dados;   
    }
    */
    public static function contaRegistro($ano){
        $anoletivo = $ano;
        $sqlContador = "SELECT * FROM turmas WHERE anoletivo = :anoletivo";
        
        $con = Connection::getConnection();

        $query = $con->prepare($sqlContador);
        $query->bindValue(':anoletivo',$anoletivo);   
        $query->execute();   
        $count = $query->rowCount();
        return $count;
    }

    public static function buscar($ano,$inicial,$limite){

        $anoletivo = $ano;

        $sql = "SELECT * FROM turmas WHERE anoletivo = :anoletivo LIMIT $inicial, $limite";

        $con = Connection::getConnection(); 
        $query = $con->prepare($sql);  
        $query->bindValue(':anoletivo',$anoletivo); 
        $query->execute();   
        $dados = $query->fetchAll();
        return $dados;   
    }
    
}
