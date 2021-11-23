<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets\CSS\estilo.css" />
  <title>Curso PHP</title>
</head>

<body>
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Indíce de Atividades</h2>
  </header>
  <main class="principal">
    <div class="conteudo">
      <nav class="modulos">
        <div class="modulo marrom">
          <h3>Módulo 01</h3>
          <ul>
            <li><a href="exercicio.php">Exercicio A</a></li>
            <li><a href="#">Exercicio B</a></li>
            <li><a href="#">Exercicio C</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </main>
  <footer class="rodape">LHENRIQUE TM. <?= date('Y'); ?> </footer>
</body>

</html>