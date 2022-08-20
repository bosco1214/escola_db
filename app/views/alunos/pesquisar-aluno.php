<?php

use \app\controllers\Alunos;

?>
<div class="container">
    <h2>Pesquisar aluno</h2>
    <hr>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
        <form class="d-flex" action="" method="post">
            <input class="form-control me-2" type="search" placeholder="pesquisar aluno" aria-label="Search" name="nome" size="50">
            <input class="btn btn-primary me-2" type="submit" name="pesquisar" value="Pesquisar">
            <a class="btn btn-primary me-2" href="<?= URL ?>/alunos/cadastrar/">Cadastrar</a>
            <a class="btn btn-warning" href="">Voltar</a>
        </form>
        </div>
    </nav>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Id.</th>
                <th>Nome do aluno</th>
                <th>Data de nasc.</th>
                <th>Nome da mãe</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
        <?php 

            if(isset($_POST['pesquisar'])) {
                $db = new Alunos();
                $dados = array();
                $dados = $db->pesquisar($_POST['nome']);
            }

            if($dados){
                foreach ($dados as $row) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($row['datadenasc'])) ?></td>
                <td><?= $row['nomedamae'] ?></td>
                <td>
                    <a href="<?= URL ?>/alunos/edit/?id=<?php echo base64_encode($row['id']); ?>">Identificação</a> <br>
                    <a href="<?= URL ?>/alunos/editDados/?id=<?php echo base64_encode($row['id']); ?>">Dados do aluno</a> <br>
                    <a href="<?= URL ?>/alunos/editVinculo/?id=<?php echo base64_encode($row['id']); ?>">Vínculo/Turma</a> <br>
                    <a href="<?= URL ?>/alunos/delCadastro/?id=<?php echo base64_encode($row['id']); ?>">Excluir</a>
                </td>
            </tr>
            <?php } } ?>
        </tbody> 
        </table>
</div>
<br>