<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>03 Exercicio de formulário</title>
   <?php
      $txt = isset($_GET["t"]) ? ($_GET["t"]) : "Texto genérico!";
      $tam = isset($_GET["tam"]) ? ($_GET["tam"]) : "12pt";
      $cor = isset($_GET["cor"]) ? ($_GET["cor"]) : "#000000"
   ?>
   <style>
      span.texto {
         font-size: <?php echo $tam; ?>;
         color: <?php echo $cor; ?>;
      }
   </style>
</head>
<body>
   <div>
      <?php
        echo "<span class='texto'>$txt</span>";
      ?>
      <br>
      <a href="03exercicio.html"> <small>Voltar</small> </a>
   </div>
</body>
</html>

