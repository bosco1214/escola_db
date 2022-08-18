<?php

use \app\controllers\Turmas;

$qtdRegistro = 5;
$rangePagina = 1;
//modificacao
if(isset($_POST['anoletivo'])){
    $anoletivo = $_POST['anoletivo'];
}else{
    $anoletivo = date('Y');
}

$pagina_atual = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

$inicial = ($pagina_atual -1) * $qtdRegistro;

$listar = new Turmas();
$resultado = array();
//$resultado = $listar->listar($inicial,$qtdRegistro);
$resultado = $listar->listar($anoletivo,$inicial,$qtdRegistro);

$pListar = new Turmas();
$pResultado = $pListar->contarRegistro($anoletivo);

/* Idêntifica a primeira página */
$primeira_pagina = 1;

/* Cálcula qual será a última página */
$ultima_pagina  = ceil($pResultado / $qtdRegistro);

/* Cálcula qual será a página anterior em relação a página atual em exibição */
$pagina_anterior = ($pagina_atual > 1) ? $pagina_atual -1 : '' ;

/* Cálcula qual será a pŕoxima página em relação a página atual em exibição */
$proxima_pagina = ($pagina_atual < $ultima_pagina) ? $pagina_atual +1 : ''  ;

/* Cálcula qual será a página inicial do nosso range */
$range_inicial  = (($pagina_atual - $rangePagina) >= 1) ? $pagina_atual - $rangePagina : 1 ;

/* Cálcula qual será a página final do nosso range */
$range_final   = (($pagina_atual + $rangePagina) <= $ultima_pagina ) ? $pagina_atual + $rangePagina : $ultima_pagina ;

/* Verifica se vai exibir o botão "Primeiro" e "Pŕoximo" */
$exibir_botao_inicio = ($range_inicial < $pagina_atual) ? 'mostrar' : 'esconder';

/* Verifica se vai exibir o botão "Anterior" e "Último" */
$exibir_botao_final = ($range_final > $pagina_atual) ? 'mostrar' : 'esconder';

?>
<div class="container">
    <h2>Turmas</h2>
    <hr>
    <form action="<?= URL ?>/turmas/index/" method="post">
        <div class="row">
            <div class="col-md-2">
                <input type="hidden" name="qtdInicial" id="qtdInicial" value="<?php echo $inicial; ?>"> 
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
        <?php foreach ($resultado as $row) { ?>
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

    <?php if(!$resultado){ ?>
        <div class="alert alert-danger mt-2" role="alert">
            Registros não localizados!
        </div>
    <?php } else { ?>

    <div class='box-paginacao'>     
       <a class='btn btn-dark <?=$exibir_botao_inicio?>' href="listar-turma-pag.php?page=<?=$primeira_pagina?>" title="Primeira Página">Primeira</a>    
       <a class='btn btn-dark <?=$exibir_botao_inicio?>' href="listar-turma-pag.php?page=<?=$pagina_anterior?>" title="Página Anterior">Anterior</a>     
   
      <?php  
      /* Loop para montar a páginação central com os números */   
      for ($i=$range_inicial; $i <= $range_final; $i++):   
        $destaque = ($i == $pagina_atual) ? 'destaque' : '' ;  
        ?>   
        <a class='btn btn-secondary <?=$destaque?>' href="listar-turma-pag.php?page=<?=$i?>"><?=$i?></a>    
      <?php endfor; ?>    
   
       <a class='btn btn-dark <?=$exibir_botao_final?>' href="listar-turma-pag.php?page=<?=$proxima_pagina?>" title="Próxima Página">Próxima</a>    
       <a class='btn btn-dark <?=$exibir_botao_final?>' href="listar-turma-pag.php?page=<?=$ultima_pagina?>" title="Última Página">Último</a>       
   </div>       
  <?php } ?>  
</div>