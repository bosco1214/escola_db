<div class="container">
    <h2>Editar aluno</h2>
    <hr>
    <?php foreach ($dados as $row) { ?>
    <form action="<?= URL ?>/alunos/editarCad/" method="post">
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" name="id" id="id" value="<?= $id ?>">
                <label for="nomedoaluno">Nome do aluno</label>
                <input class="form-control" type="text" name="nomedoaluno" id="nomedoaluno" value="<?= $row['nome'] ?>" required>
            </div>
            <div class="col-md-2">
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" class="form-control">
                    <option value="<?= $row['sexo'] ?>"><?= $row['sexo'] ?></option>
                    <option value="MASCULINO">Masculino</option>
                    <option value="FEMININO">Feminino</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="datadenasc">Data de nascimento</label>
                <input class="form-control" type="date" name="datadenasc" id="datadenasc" maxlength="10" value="<?= $row['datadenasc'] ?>">
            </div>
            <div class="col-md-2">
                <label for="cor_raca">Cor/Raça</label>
                <select name="cor_raca" id="cor_raca" class="form-control">
                    <option value="NAO DECLARADA">NAO DECLARADA</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="nomedamae">Nome da mãe</label>
                <input class="form-control" type="text" name="nomedamae" id="nomedamae" value="<?= $row['nomedamae'] ?>" required>
            </div>
            <div class="col-md-6">
                <label for="nomedopai">Nome do pai</label>
                <input class="form-control" type="text" name="nomedopai" id="nomedopai" value="<?= $row['nomedopai'] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label for="nee">Aluno NEE</label>
                <select name="nee" id="nee" class="form-control">
                    <option value="<?= $row['nee'] ?>"><?= $row['nee'] ?></option>
                    <option value="NAO">Não</option>
                    <option value="SIM">Sim</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="tipo_nee">Tipo de NEE</label>
                <input class="form-control" type="text" name="tipo_nee" id="tipo_nee" value="<?= $row['tipo_nee'] ?>">
            </div>
            <div class="col-md-2">
                <label for="nacionalidade">Nacionalidade</label>
                <select name="nacionalidade" id="nacionalidade" class="form-control">
                    <option value="BRASILEIRA">BRASILEIRA</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="naturalidade">Naturalidade-UF</label>
                <input class="form-control" type="text" name="naturalidade" id="naturalidade" value="<?= $row['naturalidade'] ?>">
            </div>
        </div>

        <div class="form-group mt-2">
            <input type="submit" value="Enviar/Gravar" name="enviar" class="btn btn-primary">
            <a class="btn btn-warning" href="<?= URL ?>/alunos/pesquisarAluno/">Voltar</a>
        </div>

    </form>
    <?php } ?>
</div>