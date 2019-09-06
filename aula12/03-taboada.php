<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Taboda</title>
</head>
<body>
   <div>
      <h2>Resposta</h2>
      <?php
        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
        echo "Abaixo a taboada de $v<br><br>";
        $ini = 0;
        do {
           echo "<br> " . $v . " X " . $ini . " = " . ($v * $ini);
           $ini++;
        } while ($ini <= 10);
      
        
      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <a href="03exercicio.html" class="myButton"> <small>Recarregar</small> </a>
   </div>
</body>
</html>