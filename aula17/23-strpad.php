<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas |str_pad</title>
</head>
<body>
   <div>
      <h2>Testando funções existentes</h2>
      <?php
        $nome = "Giovani";
        $novo = str_pad($nome, 30);
        print("Eu, $nome, sou lindo!")
      ?>
   </div>
</body>
</html>

<!-- 
str_pad_right;
str_pad_left;
str_pad_center; 
-->