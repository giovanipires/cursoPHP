<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | str_word_count</title>
</head>
<body>
   <div>
      <h2>Testando funções existentes</h2>
      <?php
         $frase = "Eu vou estudar PHP.";
         $cont = str_word_count($frase, 2);
        print_r($cont);
      ?>
   </div>
</body>
</html>

<!-- 
%d = valor decimal (positivo ou negativo)
%u valor decimal sem sinal (apenas positivos)
%f valor real
%s string 
-->