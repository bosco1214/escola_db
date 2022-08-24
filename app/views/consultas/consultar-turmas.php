<style type="text/css">
 table{
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
    line-height: 12px;

  }

 th{

  text-align: center;
  justify-content: center;

 }

 .col-wdt{

  column-width: 2px;
  text-align: center;

 }

 .col-siz{

  column-width: 2px;
  text-align: center;

 }

</style>
<div class="container">
    <h2>Consultar turmas</h2>
    <hr>
    <form action="" method="post">
        <div class="d-flex">
            <div class="row">
                <div class="col-md-8 mt-2">
                    <select name="turma" id="turma" class="form-select">
                        <option value="">Selecione a turma</option>
                        <?php
                            use app\controllers\Consultas;
                            foreach($dados as $turmas) { ?>
                        <option value="<?= $turmas['id'] ?>"><?= $turmas['nome'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-4 mt-2">
                    <input class="btn btn-primary" type="submit" value="Buscar" name="buscar" id="buscar">
                </div>
            </div>
        </div>
    </form>
    <?php
        if(isset($_POST['buscar'])) {
            $id = $_POST['turma'];
            $db = new Consultas();
            $registro = $db->consultar($id);
            if ($registro > 0) { ?>
                <?php foreach($registro as $row) { ?>
    <div class="form-group mt-2">
        <b>Turma: </b><?= $row['turma'] ?> <label> - </label> <b>Ano letivo: </b><?= $row['anoletivo'] ?> 
    </div>   
    <table class="table table-striped table-bordered table-hover mt-2">
        <thead>
            <tr>
            <th class="col-wdt" width="100" align="center">Turma</th>
            <th width="1" align="center">Nº</th>
            <th width="200" align="center">Nome do aluno</th>
            <th width="20" align="center">Sexo</th>
            <th width="80" align="center">Data de nasc</th>
            <th width="200" align="center">Nome da mãe</th>
            <th width="50" align="center">Editar</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td align="center"><?= $row['turma'] ?></td>
                <td align="center"><?= $row['numero'] ?></td>
                <td align="left"><?= $row['nome'] ?></td>
                <td align="center"><?= $row['sexo'] ?></td>
                <td align="center"><?= date('d/m/Y',strtotime($row['datadenasc'])) ?></td>
                <td align="left"><?= $row['nomedamae'] ?></td>
                <td align="center">
                    <a href="">Editar</a>
                </td>
            </tr>
            
        </tbody>
    </table>
    <?php } } else { ?>
        <div class="alert alert-warning mt-2" role="alert">
           Registro não localizado!
    </div>
     <?php } } ?>
</div>