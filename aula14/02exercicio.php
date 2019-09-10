<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>02 exercício FUNÇÃO</title>
</head>
<body>
   <div>
      <h2>Aprendendo FUNÇÃO com retorno</h2>
      <?php
        function soma($n1, $n2) {
         //   $tot = $n1 + $n2;
         //   return $tot;
         return $n1 + $n2;
        }
        
        $x = 3;
        $y = 4;
        $r = soma ($x, $y);
        echo "A soma entre $x e $y é igual a $r";
      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <a href="03exercicio.html" class="myButton"> <small>Recarregar</small> </a>
   </div>
</body>
</html>