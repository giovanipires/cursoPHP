<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | subst</title>
</head>
<body>
   <div>
      <h2>Testando funções existentes</h2>
      <?php
        $site = "Curso em vídeo de PHP.";
        $sub = substr($site, 0, 5); //função pega da posiçao 0 e até tamanho 5; Também pode ser utilizado com nº negativos.
        echo "$sub ";
      ?>
   </div>
</body>
</html>
