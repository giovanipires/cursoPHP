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
      <h2>Resultado</h2>
      
      <?php
        $i = 1;
        while ($i <= 5) {
           $v = "num".$i;
           $url = "v".$i;
           $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
           $i++;
        }
      //   echo "$num1 $num2 $num3 $num4 $num5";

         $i = 1;
         while ($i <= 5) {
            $v = "num".$i;
            echo "Valor $i : " .$$v . "<br>";
            $i++;
         }
      ?>
      
      <br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <a href="05exercicio.php" class="myButton"> <small>Voltar</small> </a>
   </div>
</body>
</html>

