<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>Variáveis variantes</title>
</head>
<body>
   <div>
      <?php
        $site = "cursoemvideo";
        $$site = "cursoPHP";
        echo "O conteudo da primeira variável é: " .$site;
        echo "<br>O conteudo da segunda variável é: " .$cursoemvideo;
      ?>
   </div>
</body>
</html>