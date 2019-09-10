<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>01 exercício FUNÇÃO</title>
</head>
<body>
   <div>
      <h2>Aprendendo FUNÇÃO, passagem referência</h2>
      <?php
        function teste (&$x) {
           $x += 2;
           echo "<p>O valor de X é $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a.</p>"

      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <!-- <a href="03exercicio.html" class="myButton"> <small>Recarregar</small> </a> -->
   </div>
</body>
</html>