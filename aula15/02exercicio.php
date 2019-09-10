<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>02 exercício testando FUNÇÃO</title>
</head>
<body>
   <div>
      <h2>Testando novas funções</h2>
      <?php
         include "funcoes.php";
         // require "funcoes.php";
         Ola();
         mostraValor(4);
         echo "<br/> Fechando o arquivo."
      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <!-- <a href="03exercicio.html" class="myButton"> <small>Recarregar</small> </a> -->
   </div>
</body>
</html>