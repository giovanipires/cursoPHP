<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>05 Exercício while</title>
</head>
<body>
   <div>
      <h1>Exercício</h1>
      <form method="get" action="05-parte2.php">
      <?php
        $c = 1;
        while ($c <= 5) {
           echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'> <br> <br>";
           $c++;
        }
      ?>
         <input type="submit" value="Enviar" class="myButton">
      </form>
      <br>
      <!-- <input type="button" value="Recarregar" onClick="window.location.reload()"> -->
      <!-- <a href="01exercicio.html"> <small>Voltar</small> </a> -->
   </div>
</body>
</html>

