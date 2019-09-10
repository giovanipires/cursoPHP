<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas |str_replace</title>
</head>
<body>
   <div>
      <h2>Testando funções existentes</h2>
      <?php
        $texto = "Gosto de estudar história!!!";
        $novo = str_replace("história", "PHP", $texto);
        echo($novo);
      ?>
   </div>
</body>
</html>