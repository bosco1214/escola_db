<div class="container">
    <h2>Turmas</h2>
    <hr>
    <form action="<?= URL ?>/turmas/pesquisarTurmas/" method="post">
        <div class="row">
            <div class="col-md-2"> 
                <input class="form-control" type="text" name="anoletivo" id="anoletivo" placeholder="ano letivo" maxlength="4">
                </div>
                <div class="col-md-4">
                <input type="submit" value="Pesquisar" name="pesquisar" class="btn btn-success">
                <a class="btn btn-primary" href="<?= URL ?>/turmas/cadastrar/">Cadastrar nova turma</a>
            </div>
        </div>
    </form>
    <table class="table table-striped table-bordered table-hover mt-2">
        <thead>
            <tr>
                <th>Id.</th>
                <th>Turma</th>
                <th>Turno</th>
                <th>Etapa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($dados as $row) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['turno'] ?></td>
                <td><?= $row['etapa'] ?></td>
                <td>
                    <a class="btn btn-primary" href="<?= URL ?>/turmas/editar/?id=<?php echo base64_encode($row['id']) ?>">Editar</a>
                    <a class="btn btn-danger" href="<?= URL ?>/turmas/excluir/?id=<?php echo base64_encode($row['id']) ?>">Excluir</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php if(!$dados){ ?>
        <div class="alert alert-danger" role="alert">
            Registros não localizados!
        </div>
    <?php } ?>
</div>