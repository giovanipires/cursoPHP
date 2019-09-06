<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>01 Exercício Do / While</title>
</head>
<body>
   <div>
      <h2>Contador progressivo</h2>
      <?php
        $c = 1;
        do {
           echo " $c";
           $c += 1;
        } while ($c <= 20);
      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <a href="0101exercicio.php" class="myButton"> <small>Regressivo</small> </a>
   </div>
</body>
</html>