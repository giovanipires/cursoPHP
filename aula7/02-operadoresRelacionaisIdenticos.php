<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>Operadores Relacionais Identicos</title>
</head>
<body>
   <div>
      <?php
         $a = 3;
         $b = "3";
         $r = ($a == $b) ? "SIM" : "NÃO";
         echo "As variáveis A e B são iguais? $r <br>";
         $i = ($a === $b) ? "SIM" : "NÃO";
         echo "As variáveis A e B são identicas? $i";
      ?>
   </div>
</body>
</html>