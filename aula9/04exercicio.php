<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>04 Exercicio IF</title>
</head>
<body>
   <div>
      <?php
         $n1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
         $n2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
         $media = ($n1 + $n2) / 2;
         $a = "APROVADO";
         $r = "REPROVADO";
         if ($media >= 6) {
            echo "A média do aluno foi $media e sua situação é $a.";
         }
         else {
            echo "A média do aluno foi $media e sua situação é $r.";
         }
      ?>
      <br>
      <a href="04exercicio.html"> <small>Voltar</small> </a>
   </div>
</body>
</html>

