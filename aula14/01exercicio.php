<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>01 exercício FUNÇÃO</title>
</head>
<body>
   <div>
      <h2>Aprendendo FUNÇÃO sem retorno</h2>
      <?php
        function soma($n1, $n2) {
           $tot = $n1 + $n2;
           echo "<p>A soma de $n1 e $n2 vale: $tot</p>";
        }
        soma (3, 4);
        soma (8, 2);
        $x = 9;
        $y = 15;
        soma ($x, $y);
      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <a href="03exercicio.html" class="myButton"> <small>Recarregar</small> </a>
   </div>
</body>
</html>