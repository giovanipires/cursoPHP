<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | strpos</title>
</head>
<body>
   <div>
      <h2>Testando funções existentes</h2>
      <?php
        $frase = "Estou aprendendo PHP.";
        $pos = strpos($frase, "PHP");
        echo "$frase <br>";
        echo "A string foi encontrada na posição $pos.";
      ?>
   </div>
</body>
</html>
