<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>02 Exercicio de formulário</title>
</head>
<body>
   <div>
      <?php
         $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[nome não foi informado]";
         $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
         $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sexo não foi informado]";
         $idade = date("Y") - $ano;
         echo "O $nome é $sexo e tem $idade anos."
      ?>
      <br>
      <a href="02exercicio.html"> <small>Voltar</small> </a>
   </div>
</body>
</html>

