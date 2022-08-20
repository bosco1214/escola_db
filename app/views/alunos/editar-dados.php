<div class="container">
    <h2>Dados do aluno</h2>
    <hr>
    <?php foreach ($dados as $row) { ?>
    <form action="<?= URL ?>/alunos/editarDados/" method="post">
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" name="idaluno" value="<?= $row['idaluno'] ?>">
                <label for="certidao">Certidão de nascimento</label>
                <input class="form-control" type="text" name="certidao" id="certidao" value="<?= $row['certidao'] ?>">
            </div>
            <div class="col-md-3">
                <label for="rg_aluno">RG do aluno</label>
                <input class="form-control" type="text" name="rg_aluno" id="rg_aluno" value="<?= $row['rg_aluno'] ?>">
            </div>
            <div class="col-md-3">
                <label for="cpf_aluno">CPF do aluno</label>
                <input class="form-control" type="text" name="cpf_aluno" id="cpf_aluno" value="<?= $row['cpf_aluno'] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label for="contato1">Contato 1</label>
                <input class="form-control" type="text" name="contato1" id="contato1" value="<?= $row['contato1'] ?>">
            </div>
            <div class="col-md-3">
                <label for="contato2">Contato 2</label>
                <input class="form-control" type="text" name="contato2" id="contato2" value="<?= $row['contato2'] ?>">
            </div>
            <div class="col-md-6">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email" id="email" value="<?= $row['email'] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="endereco">Endereço</label>
                <input class="form-control" type="text" name="endereco" id="endereco" value="<?= $row['endereco'] ?>">
            </div>
            <div class="col-md-3">
                <label for="bairro">Bairro</label>
                <input class="form-control" type="text" name="bairro" id="bairro" value="<?= $row['bairro'] ?>">
            </div>
            <div class="col-md-2">
                <label for="cep">CEP</label>
                <input class="form-control" type="text" name="cep" id="cep" value="<?= $row['cep'] ?>">
            </div>
            <div class="col-md-3">
                <label for="cidade">Cidade-UF</label>
                <input class="form-control" type="text" name="cidade" id="cidade" value="<?= $row['cidade'] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label for="transp">Transp. Escolar</label>
                <select name="transp" id="transp" class="form-control">
                    <option value="<?= $row['transpescolar'] ?>"><?= $row['transpescolar'] ?></option>
                    <option value="SIM">Sim</option>
                    <option value="NAO">Não</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="bolsa">Bolsa família</label>
                <select name="bolsa" id="bolsa" class="form-control">
                    <option value="<?= $row['bolsafamilia'] ?>"><?= $row['bolsafamilia'] ?></option>
                    <option value="SIM">Sim</option>
                    <option value="NAO">Não</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="nis">NIS</label>
                <input class="form-control" type="text" name="nis" id="nis" value="<?= $row['nis'] ?>">
            </div>
            <div class="col-md-4">
                <label for="cart_sus">Cartão SUS</label>
                <input class="form-control" type="text" name="cart_sus" id="cart_sus" value="<?= $row['cartaosus'] ?>">
            </div>
        </div>

       

        <div class="form-group mt-2">
            <input type="submit" value="Enviar/Gravar" name="enviar" class="btn btn-primary">
            <a class="btn btn-warning" href="<?= URL ?>">Voltar</a>
        </div>

    </form>
    <?php } ?>
</div>