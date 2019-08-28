<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>Operações aritiméticas</title>
</head>
<body>
   <div>
      <?php
         $n1 = $_GET["a"];
         $n2 = $_GET["b"];
         echo "<h2>Valores reebidos: $n1 e $n2.</h2>";
         $media = ($n1 + $n2) / 2;
         echo "A soma de $n1 e $n2 é = " .($n1 + $n2);
         echo "<br/> A subtração de $n1 e $n2 é = " .($n1 - $n2);
         echo "<br/> A multiplicação de $n1 e $n2 é = " .($n1 * $n2);
         echo "<br/> A divisão de $n1 e $n2 é = " .($n1 / $n2);
         echo "<br/> O módulo de $n1 e $n2 é = " .($n1 % $n2);
         echo "<br/> A média de $n1 e $n2 é = " .$media;
      ?>
   </div>
</body>
</html>