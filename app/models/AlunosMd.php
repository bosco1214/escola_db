<?php

namespace app\models;

use \app\lib\database\Connection;

class AlunosMd {

    public static function create(){

        $nome = mb_strtoupper(filter_input(INPUT_POST, 'nomedoaluno', FILTER_SANITIZE_SPECIAL_CHARS ));
        $sexo = mb_strtoupper(filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS ));
        $datadenasc = mb_strtoupper(filter_input(INPUT_POST, 'datadenasc', FILTER_SANITIZE_SPECIAL_CHARS ));
        $cor_raca = mb_strtoupper(filter_input(INPUT_POST, 'cor_raca', FILTER_SANITIZE_SPECIAL_CHARS ));
        $nomedamae = mb_strtoupper(filter_input(INPUT_POST, 'nomedamae', FILTER_SANITIZE_SPECIAL_CHARS ));
        $nomedopai = mb_strtoupper(filter_input(INPUT_POST, 'nomedopai', FILTER_SANITIZE_SPECIAL_CHARS ));
        $nee = filter_input(INPUT_POST, 'nee', FILTER_SANITIZE_SPECIAL_CHARS );
        $tipo_nee = filter_input(INPUT_POST, 'tipo_nee', FILTER_SANITIZE_SPECIAL_CHARS );
        $nacionalidade = filter_input(INPUT_POST, 'nacionalidade', FILTER_SANITIZE_SPECIAL_CHARS );
        $naturalidade = mb_strtoupper(filter_input(INPUT_POST, 'naturalidade', FILTER_SANITIZE_SPECIAL_CHARS ));
        $data_cadastro = date('Y-m-d');
        $data_alteracao = date('Y-m-d');

        $sql = "INSERT INTO alunos (nome,datadenasc,sexo,nomedamae,nomedopai,nacionalidade,naturalidade,nee,tipo_nee,cor_raca,data_cadastro,data_alteracao) VALUES (:nome,:datadenasc,:sexo,:nomedamae,:nomedopai,:nacionalidade,:naturalidade,:nee,:tipo_nee,:cor_raca,:data_cadastro,:data_alteracao)";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':nome', $nome);
        $query->bindValue(':datadenasc', $datadenasc);
        $query->bindValue(':sexo', $sexo);
        $query->bindValue(':nomedamae', $nomedamae);
        $query->bindValue(':nomedopai', $nomedopai);
        $query->bindValue(':nee', $nee);
        $query->bindValue(':tipo_nee', $tipo_nee);
        $query->bindValue(':nacionalidade', $nacionalidade);
        $query->bindValue(':naturalidade', $naturalidade);
        $query->bindValue(':cor_raca', $cor_raca);
        $query->bindValue(':data_cadastro', $data_cadastro);
        $query->bindValue(':data_alteracao', $data_alteracao);
        $res = $query->execute();

        if(!$res){
            throw new \PDOException("Falha na gravação");
            return false;
        }else{
            return true;
        }
    }

    public static function addData(){

        $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $certidao = mb_strtoupper(filter_input(INPUT_POST, 'certidao', FILTER_SANITIZE_SPECIAL_CHARS ));
        $rg_aluno = mb_strtoupper(filter_input(INPUT_POST, 'rg_aluno', FILTER_SANITIZE_SPECIAL_CHARS ));
        $cpf_aluno = mb_strtoupper(filter_input(INPUT_POST, 'cpf_aluno', FILTER_SANITIZE_SPECIAL_CHARS ));
        $contato1 = mb_strtoupper(filter_input(INPUT_POST, 'contato1', FILTER_SANITIZE_SPECIAL_CHARS ));
        $contato2 = mb_strtoupper(filter_input(INPUT_POST, 'contato2', FILTER_SANITIZE_SPECIAL_CHARS ));
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS );
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS );
        $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS );
        $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS );
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS );
        $transp = filter_input(INPUT_POST, 'transp', FILTER_SANITIZE_SPECIAL_CHARS );
        $bolsa = filter_input(INPUT_POST, 'bolsa', FILTER_SANITIZE_SPECIAL_CHARS );
        $nis = filter_input(INPUT_POST, 'nis', FILTER_SANITIZE_SPECIAL_CHARS );
        $cart_sus = filter_input(INPUT_POST, 'cart_sus', FILTER_SANITIZE_SPECIAL_CHARS );

        $sql = "INSERT INTO dados_aluno (idaluno,certidao,rg_aluno,cpf_aluno,contato1,contato2,email,endereco,bairro,cep,cidade,transpescolar,bolsafamilia,nis,cartaosus) VALUES (:idaluno,:certidao,:rg_aluno,:cpf_aluno,:contato1,:contato2,:email,:endereco,:bairro,:cep,:cidade,:transpescolar,:bolsafamilia,:nis,:cartaosus)";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':idaluno', $id);
        $query->bindValue(':certidao', $certidao);
        $query->bindValue(':rg_aluno', $rg_aluno);
        $query->bindValue(':cpf_aluno', $cpf_aluno);
        $query->bindValue(':contato1', $contato1);
        $query->bindValue(':contato2', $contato2);
        $query->bindValue(':email', $email);
        $query->bindValue(':endereco', $endereco);
        $query->bindValue(':bairro', $bairro);
        $query->bindValue(':cep', $cep);
        $query->bindValue(':cidade', $cidade);
        $query->bindValue(':transpescolar', $transp);
        $query->bindValue(':bolsafamilia', $bolsa);
        $query->bindValue(':nis', $nis);
        $query->bindValue(':cartaosus', $cart_sus);
        $res = $query->execute();

        if(!$res){
            throw new \PDOException("Falha na gravação");
            return false;
        }else{
            return true;
        }
    }

    public static function vincular(){

        $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $idcenso = mb_strtoupper(filter_input(INPUT_POST, 'idcenso', FILTER_SANITIZE_SPECIAL_CHARS ));
        $sige = mb_strtoupper(filter_input(INPUT_POST, 'sige', FILTER_SANITIZE_SPECIAL_CHARS ));
        $situacao = mb_strtoupper(filter_input(INPUT_POST, 'condicao', FILTER_SANITIZE_SPECIAL_CHARS ));
        $idturma = mb_strtoupper(filter_input(INPUT_POST, 'turma', FILTER_SANITIZE_SPECIAL_CHARS ));
        $turma = filter_input(INPUT_POST, 'turma_text', FILTER_SANITIZE_SPECIAL_CHARS );
        $aluno_enturmado = "SIM";

        $sql = "INSERT INTO situacao_escolar (idaluno,idcenso,sige,situacao,idturma,turma,aluno_enturmado) VALUES (:idaluno, :idcenso, :sige, :situacao, :idturma, :turma, :aluno_enturmado)";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':idaluno', $id);
        $query->bindValue(':idcenso', $idcenso);
        $query->bindValue(':sige', $sige);
        $query->bindValue(':situacao', $situacao);
        $query->bindValue(':idturma', $idturma);
        $query->bindValue(':turma', $turma);
        $query->bindValue(':aluno_enturmado', $aluno_enturmado);
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
        $query->execute();
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function getLastId(){

        $sql = "SELECT * FROM alunos ORDER BY id DESC";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->execute();
        $resultado = $query->fetch();
        return $resultado;
    }

    public static function search($params){

        $nome = '%'.$params.'%';

        $sql = "SELECT * FROM alunos WHERE nome LIKE :nome";

        $conectar = Connection::getConnection();

        $query = $conectar->prepare($sql);
        $query->bindValue(':nome', $nome);
        $query->execute();

        $count = $query->rowCount();

        if($count === 0){
            throw new \PDOException("Registro não localizado!");
            return false;
        }else{
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            //echo "<pre>"; print_r($resultado); echo "</pre>"; exit;
            return $resultado; 
        }
    }

    public static function getIdAluno($id,$table){

        $idCad = $id;

        $sql = 'SELECT * FROM ' . $table . ' WHERE id = :id';

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id',$idCad);
        $query->execute();
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function updateCad(){

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = mb_strtoupper(filter_input(INPUT_POST, 'nomedoaluno', FILTER_SANITIZE_SPECIAL_CHARS ));
        $sexo = mb_strtoupper(filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS ));
        $datadenasc = mb_strtoupper(filter_input(INPUT_POST, 'datadenasc', FILTER_SANITIZE_SPECIAL_CHARS ));
        $cor_raca = mb_strtoupper(filter_input(INPUT_POST, 'cor_raca', FILTER_SANITIZE_SPECIAL_CHARS ));
        $nomedamae = mb_strtoupper(filter_input(INPUT_POST, 'nomedamae', FILTER_SANITIZE_SPECIAL_CHARS ));
        $nomedopai = mb_strtoupper(filter_input(INPUT_POST, 'nomedopai', FILTER_SANITIZE_SPECIAL_CHARS ));
        $nee = filter_input(INPUT_POST, 'nee', FILTER_SANITIZE_SPECIAL_CHARS );
        $tipo_nee = filter_input(INPUT_POST, 'tipo_nee', FILTER_SANITIZE_SPECIAL_CHARS );
        $nacionalidade = filter_input(INPUT_POST, 'nacionalidade', FILTER_SANITIZE_SPECIAL_CHARS );
        $naturalidade = mb_strtoupper(filter_input(INPUT_POST, 'naturalidade', FILTER_SANITIZE_SPECIAL_CHARS ));
        //$data_cadastro = date('Y-m-d');
        $data_alteracao = date('Y-m-d');

        $sql = "UPDATE alunos SET nome = :nome, sexo = :sexo, datadenasc = :datadenasc, cor_raca = :cor_raca, nomedamae = :nomedamae, nomedopai = :nomedopai, nee = :nee, tipo_nee = :tipo_nee, nacionalidade = :nacionalidade, naturalidade = :naturalidade, data_alteracao = :data_alteracao WHERE id = :id";

        $con = Connection::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':nome', $nome);
        $query->bindValue(':datadenasc', $datadenasc);
        $query->bindValue(':sexo', $sexo);
        $query->bindValue(':nomedamae', $nomedamae);
        $query->bindValue(':nomedopai', $nomedopai);
        $query->bindValue(':nee', $nee);
        $query->bindValue(':tipo_nee', $tipo_nee);
        $query->bindValue(':nacionalidade', $nacionalidade);
        $query->bindValue(':naturalidade', $naturalidade);
        $query->bindValue(':cor_raca', $cor_raca);
        //$query->bindValue(':data_cadastro', $data_cadastro);
        $query->bindValue(':data_alteracao', $data_alteracao);
        $query->bindValue(':id', $id);
        $res = $query->execute();

        if(!$res){
            throw new \PDOException("Falha na gravação");
            return false;
        }else{
            return true;
        }
    }

}
