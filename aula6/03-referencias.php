<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>Referências</title>
</head>
<body>
   <div>
      <?php
         $a = 3;
         $b = $a;
         $b += 5;
         echo "Variável a vale: " .$a;
         echo "<br>Variável b vale: " .$b;
         $b = &$a;
         $b += 3;
         echo "<br><br>Variável a vale: " .$a;
         echo "<br>Variável b vale: " .$b;
      ?>
   </div>
</body>
</html>