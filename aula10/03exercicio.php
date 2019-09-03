<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>03 Exercicio switch</title>
</head>
<body>
   <div>
      <?php
         $reg = isset($_GET["uf"]) ? $_GET["uf"] : 0;
         switch ($reg) {
            case 1:
               echo "Você mora na região <strong>Norte</strong> do pais.";
               break;
            case 2:
               echo "Você mora na região <strong>Centro-Oeste</strong> do pais.";
               break;
            case 3:
               echo "Você mora na região <strong>Nordeste</strong> do pais.";
               break;
            case 4:
               echo "Você mora na região <strong>Sudeste</strong> do pais.";
               break;
            case 5:
               echo "Você mora na região <strong>Sul</strong> do pais.";
               break;
         }
      ?>
      <br>
      <a href="javascript:history.go(-1)"> <small>Voltar</small> </a>
   </div>
</body>
</html>

