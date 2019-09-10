<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>03 exercício FUNÇÃO</title>
</head>
<body>
   <div>
      <h2>Aprendendo FUNÇÃO com retorno</h2>
      <?php
        function soma() {
         $p = func_get_args();
         $tot = func_num_args();
         $s = 0;
         for ($i=0; $i < $tot ; $i++) { 
           $s = $s + $p[$i];
           //$s += $p[$i];
         }
         return $s;
        }

        $r = soma (3,5,2,5,35);
        echo "A soma dos valores é: $r."
      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <a href="03exercicio.html" class="myButton"> <small>Recarregar</small> </a>
   </div>
</body>
</html>