<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>01 Exercicio de formulário</title>
</head>
<body>
   <div>
      <?php
         $valor = $_GET["v"];
         $rq = sqrt($valor);
         echo "A raiz de $valor é igual a: " .number_format($rq, 2);
      ?>
      <br>
      <a href="01exercicio.html"> <small>Voltar</small> </a>
   </div>
</body>
</html>