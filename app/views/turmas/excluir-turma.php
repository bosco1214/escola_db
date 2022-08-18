<div class="container">
    <h2 class="mt-2">Excluir turma</h2>
    <hr>
    <form action="<?= URL ?>/turmas/deletar/" method="post">
        <div class="form-group">
        <h4>Deseja excluir o registro?</h4>    
        <br>
            <?php foreach ($dados as $row) { ?>
                <h4><?= $row['nome'] ?></h4>
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <?php } ?>
        </div>
        <div class="form-group">
            <input class="btn btn-danger" type="submit" value="Sim, Excluir" name="enviar">
            <a class="btn btn-primary" href="<?= URL ?>/turmas/index/">Não</a>
        </div>
    </form>
</div>
<br>
<br>