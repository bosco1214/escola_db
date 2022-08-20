<div class="container">
    <h2>Deletar cadastro</h2>
    <hr>
    <?php foreach ($dados as $row) { ?>
    <form action="<?= URL ?>/alunos/deletarRegistro/" method="post">
    <input type="hidden" name="id_cad" id="id_cad" value="<?= $row['id'] ?>">
    <div class="form-group">
        <h4>Id: <?= $row['id'] ?></h4>
        <h4>Nome: <?= $row['nome'] ?></h4>
        <h4>Data de nasc.: <?= date('d/m/Y', strtotime($row['datadenasc'])) ?></h4>
        <h4>Nome da mãe: <?= $row['nomedamae'] ?></h4>
    </div>
    <div class="form-group mt-4">
        <input class="btn btn-danger" type="submit" value="Deletar registro" name="deletar">
        <a class="btn btn-warning" href="<?= URL ?>/alunos/pesquisarAluno/">Voltar</a>
    </div>
    </form>
    <?php } ?>
</div>