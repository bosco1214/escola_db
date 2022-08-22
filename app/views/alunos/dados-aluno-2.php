<?php

$id = $dados['id'];
$nome = $dados['nome'];

?>
<script type="text/javascript">
			function update() {
				var select = document.getElementById('id_turma');
				var option = select.options[select.selectedIndex];

				document.getElementById('id_turma_value').value = option.value;
				document.getElementById('id_turma_text').value = option.text;
			}
			update();
</script>
<div class="container">
    <h2>Situação Escolar</h2>
    <hr>
    <form action="<?= URL ?>/alunos/gravarVincular/" method="post">
        <div class="row">
            <div class="col-md-3">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="nome" value="<?= $nome ?>">
                <label for="idcenso">Id. Censo</label>
                <input class="form-control" type="text" name="idcenso" id="idcenso" maxlength="12">
            </div>
            <div class="col-md-3">
                <label for="sige">Sige</label>
                <input class="form-control" type="text" name="sige" id="sige" maxlength="10">
            </div>
            <div class="col-md-6">
                <label for="condicao">Situação anterior do aluno</label>
                <select name="condicao" id="condicao" class="form-control">
                    <option value="">selecione</option>
                    <option value="APROVADO">Aprovado</option>
                    <option value="REPROVADO">Reprovado</option>
                    <option value="TRANSFERIDO">Transferido</option>
                    <option value="DEIXOU DE FREQUENTAR">Deixou de frequentar</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="turma">Vincular na turma</label>
                <select name="turma" id="id_turma" class="form-control" onChange="update()">
                <option value="0" selected>selecione</option>
                <?php 
                use \app\controllers\Alunos;
                $db = new Alunos();
                $turmas = $db->readTurma();
                foreach ($turmas as $row) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
                <?php } ?>
                </select>
                <input type="hidden" name="turma_value" id="id_turma_value">
			    <input type="hidden" name="turma_text" id="id_turma_text">
            </div>
        </div>

        
       

        <div class="form-group mt-2">
            <input type="submit" value="Finalizar" name="enviar" class="btn btn-primary">
            <a class="btn btn-warning" href="<?= URL ?>">Voltar</a>
        </div>

    </form>
</div>