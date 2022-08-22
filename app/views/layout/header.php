<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= CSS ?>">
    <link rel="stylesheet" href="<?= CSS2 ?>">

    <title><?= APP_NOME ?></title>
  </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
      <a class="navbar-brand" href="<?= URL ?>">Início</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastros
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= URL ?>/alunos/cadastrar/">Alunos</a></li>
              <li><a class="dropdown-item" href="<?= URL ?>/turmas/index/">Turmas</a></li>
              <li><a class="dropdown-item" href="#">Professores</a></li>
              <li><a class="dropdown-item" href="#">Funcionários</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?= URL ?>/site/exit/">Sair</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Matrícula
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= URL ?>/alunos/pesquisarAluno">Pesquisar aluno</a></li>
              <li><a class="dropdown-item" href="<?= URL ?>/enturmar/enturmarAluno">Enturmar aluno</a></li>
              <li><a class="dropdown-item" href="#">Turmas</a></li>
              <li><a class="dropdown-item" href="#">Alunos NEE</a></li>
              <li><a class="dropdown-item" href="#">Transferidos</a></li>
              <li><a class="dropdown-item" href="#">Transp. Escolar</a></li>
              <li><a class="dropdown-item" href="#">Contato</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Acadêmico
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Período Letivo</a></li>
              <li><a class="dropdown-item" href="#">Avaliação</a></li>
              <li><a class="dropdown-item" href="#">Resultado Final</a></li>
              <li><a class="dropdown-item" href="#">Histórico Escolar</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sige Escola</a></li>
              <li><a class="dropdown-item" href="#">Educacenso</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Relatório
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Ficha de Matrícula</a></li>
              <li><a class="dropdown-item" href="#">Declaração</a></li>
              <li><a class="dropdown-item" href="#">Aut. Imagem</a></li>
              <li><a class="dropdown-item" href="#">Freq. Sala</a></li>
              <li><a class="dropdown-item" href="#">Req. Transferência</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Histórico Escolar</a></li>
            </ul>
          </li>

          </div>
        </div>
      </div>
    </nav>
  </header>


