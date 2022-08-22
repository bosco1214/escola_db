<div class="container">
    <h2>Enturmar aluno</h2>
    <hr>
    <?php if($dados == 0){ ?>
        <div class="alert alert-danger" role="alert">
            Registros não localizados!
        </div>
    <?php } else { ?>
    <form action="<?= URL ?>/enturmar/gravarEnturmar/" method="post">
    <table class="table table-striped table-hover">
        <tr>
            <th>Id.</th>
            <th>Nome do aluno</th>
            <th>Turma</th>
            <th>Ano letivo</th>
            <th>Selecionar</th>
        </tr>
        <tbody>
            <?php 
            $count = 0;
            foreach ($dados as $row) { ?>
            <tr>
                <td><?= $row['idaluno'] ?></td>             
                <td><?= $row['nomedoaluno'] ?></td>             
                <td><?= $row['turma'] ?></td>
                <td><?= $row['anoletivo'] ?></td>            
                <td>
                <input class="form-check-input mt-0" type="checkbox" name="txtAluno[<?= $count ?>][idaluno]" id="idaluno" value="<?= $row['idaluno'] ?>" aria-label="Checkbox for following text input">
                </td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-6">
            <label>Tipo de matrícula</label>
            <select name="txtAluno[<?= $count ?>][tipo_mat]" id="tipo_mat" class="form-control">
                <option value="">selecione</option>
                <option value="MATRICULA INICIAL">Matrícula Inicial</option>
                <option value="ADMITIDO">Admitido</option>
            </select>
        </div>
        <div class="col-md-6">
        <label>Tipo de movimento</label>
            <select name="txtAluno[<?= $count ?>][tipo_mov]" id="tipo_mov" class="form-control">
                <option value="">selecione</option>
                <option value="NOVATO">Novato</option>
                <option value="VETERANO">Veterano</option>
            </select>
        </div>
    </div>
    
    <hr>
    <input class="btn btn-primary" type="submit" name="enviar" value="Enturmar">
    <a class="btn btn-warning" href="<?= URL ?>">Sair</a>
    </form>
    <?php $count++; } ?>
</div>