<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>06 Exercício incremento</title>
</head>
<body>
   <div>
      <?php
        $ini = isset($_GET["ini"]) ? $_GET["ini"] : 0;
        $fim = isset($_GET["fim"]) ? $_GET["fim"] : 10;
        $inc = isset($_GET["inc"]) ? $_GET["inc"] : 1 ;

        if($ini <= $fim) {
         while ($ini <= $fim) {
             echo $ini . "&nbsp";
             $ini += $inc;
         };
 
         }
         else{
             while ($ini >= $fim) {
                 echo $ini . "&nbsp";
                 $ini -= $inc;
             }
         }
      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <a href="06exercicio.html" class="myButton"> <small>Voltar</small> </a>
   </div>
</body>
</html>