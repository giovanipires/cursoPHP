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
      <h2>Contador regressivo</h2>
      <?php
        $c = 20;
        do {
           echo " $c";
           $c -= 1;
        } while ($c >= 1);
      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <a href="01exercicio.php" class="myButton"> <small>Progressivo</small> </a>
   </div>
</body>
</html>