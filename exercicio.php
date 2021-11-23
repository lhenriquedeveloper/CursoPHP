<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets\CSS\estilo.css" />
  <link rel="stylesheet" href="assets\CSS\exercicio.css" />
  <title>Exercicio</title>
</head>

<body class="exercicio">
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Visualização do Exercicio</h2>
  </header>
  <nav class="navegacao">
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>> Sem Formatação</a>
    <a href="index.php" class="verde">Voltar</a>
  </nav>
  <main class="principal">
    <div class="conteudo">
      <?php
      //include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
      include("teste/teste.php");
      ?>
    </div>
  </main>
  <footer class="rodape">LHENRIQUE TM. <?= date('Y'); ?> </footer>
</body>

</html>