<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>02 Taboada FOR</title>
</head>
<body>
   <div>
      <h2>Resposta da taboada</h2>
      <?php
         $n = isset($_GET["num"]) ? $_GET["num"] : 1;
         echo "Abaixo a taboada de $n<br><br>";
         for ($i=1; $i <=10 ; $i++) { 
            $r = $n * $i;
            echo "$n X $i = $r <br/>";
         }
      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <!-- <a href="02exercicio.php" class="myButton"> <small>Recarregar</small> </a> -->
      <a href="javascript:history.go(-1)"> <small>Voltar</small> </a>
   </div>
</body>
</html>