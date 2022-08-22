<?php

$id = $dados['id'];
$nome = $dados['nome'];

?>
<div class="container">
    <h2>Dados do aluno</h2>
    <hr>
    <form action="<?= URL ?>/alunos/gravarDados/" method="post">
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="nome" value="<?= $nome ?>">
                <label for="certidao">Certidão de nascimento</label>
                <input class="form-control" type="text" name="certidao" id="certidao" placeholder="certidão de nascimento">
            </div>
            <div class="col-md-3">
                <label for="rg_aluno">RG do aluno</label>
                <input class="form-control" type="text" name="rg_aluno" id="rg_aluno">
            </div>
            <div class="col-md-3">
                <label for="cpf_aluno">CPF do aluno</label>
                <input class="form-control" type="text" name="cpf_aluno" id="cpf_aluno" placeholder="Ex.: 999.999.999-99">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label for="contato1">Contato 1</label>
                <input class="form-control" type="text" name="contato1" id="contato1" placeholder="(99) 99999-9999">
            </div>
            <div class="col-md-3">
                <label for="contato2">Contato 2</label>
                <input class="form-control" type="text" name="contato2" id="contato2" placeholder="(99) 99999-9999">
            </div>
            <div class="col-md-6">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="endereco">Endereço</label>
                <input class="form-control" type="text" name="endereco" id="endereco" placeholder="endereço">
            </div>
            <div class="col-md-3">
                <label for="bairro">Bairro</label>
                <input class="form-control" type="text" name="bairro" id="bairro" placeholder="bairro">
            </div>
            <div class="col-md-2">
                <label for="cep">CEP</label>
                <input class="form-control" type="text" name="cep" id="cep" placeholder="00000-000">
            </div>
            <div class="col-md-3">
                <label for="cidade">Cidade-UF</label>
                <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade-UF">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label for="transp">Transp. Escolar</label>
                <select name="transp" id="transp" class="form-control">
                    <option value="">selecione</option>
                    <option value="SIM">Sim</option>
                    <option value="NAO">Não</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="bolsa">Bolsa família</label>
                <select name="bolsa" id="bolsa" class="form-control">
                    <option value="">selecione</option>
                    <option value="SIM">Sim</option>
                    <option value="NAO">Não</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="nis">NIS</label>
                <input class="form-control" type="text" name="nis" id="nis">
            </div>
            <div class="col-md-4">
                <label for="cart_sus">Cartão SUS</label>
                <input class="form-control" type="text" name="cart_sus" id="cart_sus">
            </div>
        </div>

       

        <div class="form-group mt-2">
            <input type="submit" value="Enviar/Gravar" name="enviar" class="btn btn-primary">
            <a class="btn btn-warning" href="<?= URL ?>">Voltar</a>
        </div>

    </form>
</div>