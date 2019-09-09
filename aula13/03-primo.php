<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>03 Nº Primo</title>
</head>
<body>
   <div>
      <h2>Resposta</h2>
      <?php
         $n = isset($_GET["val"]) ? $_GET["val"] : 1;
         $qtdeMult = 0;
         echo "<h3>Analisando o nº $n<br></h3>";

         echo "Valores múltiplos: ";
            for ($i=1; $i <= $n ; $i++) { 
               if ($n % $i == 0) {
                  $valMult = $i;
                  $qtdeMult++;
                  echo "$valMult ";
               }
            }
         echo "<br/><br/>Total de múltiplos: $qtdeMult<br/><br/>";

         echo "Resultado: ";
            if ($qtdeMult == 2) {
               echo "$n, é <a style='color: red'> um nº primo.</a>";
            }
            else {
               echo "$n, <a style='color: red'>não é um nº primo.</a>";
            }


      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <!-- <a href="02exercicio.php" class="myButton"> <small>Recarregar</small> </a> -->
      <a href="javascript:history.go(-1)"> <small>Voltar</small> </a>
   </div>
</body>
</html>