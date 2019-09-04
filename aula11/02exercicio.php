<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>02 Exercicio while</title>
</head>
<body>
   <div>
      <?php
         $n = 15;
         while ($n >= 0) {
            echo $n. "<br>";
            $n-=1;
         }
      ?>
      <br>
      <input type="button" value="Recarregar" onClick="window.location.reload()">
      <!-- <a href="01exercicio.html"> <small>Voltar</small> </a> -->
   </div>
</body>
</html>

