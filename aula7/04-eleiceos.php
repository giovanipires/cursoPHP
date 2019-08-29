<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>Eleições</title>
</head>
<body>
   <div>
      <?php
        $ano = $_GET["an"];
        $idade = 2019 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.<br>";
        $tipo = ($idade >= 18 && $idade < 65) ? "obrigatório" : "não obrigatório";
        echo "Desta forma seu voto é $tipo";
      ?>
   </div>
</body>
</html>