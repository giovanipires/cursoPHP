<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>Operadores Relacionais</title>
</head>
<body>
   <div>
      <?php
         $n1 = $_GET["a"];
         $n2 = $_GET["b"];
         $tipo = $_GET["op"];
         echo "Os valores passados foram $n1 e $n2 <br>";
         $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
         echo "O resultado será: $r";
      ?>
   </div>
</body>
</html>