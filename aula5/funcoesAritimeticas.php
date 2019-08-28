<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>Funções aritiméticas</title>
   <style>
      h2 {
         font: 15pt Arial;
         color: #171559;
         font-weight: bold;
      }
   </style>
</head>
<body>
   <div>
      <?php
         $v1 = $_GET["x"];
         $v2 = $_GET["y"];
         echo "<h2>Valores recebidos: $v1 e $v2.</h2>";
         echo "O valor absoluto de $v2 é: " .abs($v2);
         echo "<br/>O valor de $v1<sup>$v2</sup> é: " .pow($v1, $v2);
         echo "<br/>A raiz de $v1 é: " .sqrt($v1);
         echo "<br/>O valor de $v2 é: " .round($v2); //ceil sempre arredonda para cima, floor sempre arredonda para baixo
         echo "<br/>A parte inteira de $v2 é: " .intval($v2);
         echo "<br/>O valor de $v1 em moeda é: R$" .number_format($v1, 2, ",", ".");
      ?>
   </div>
</body>
</html>