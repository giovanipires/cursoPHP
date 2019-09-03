<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>02 Exercicio switch</title>
</head>
<body>
   <div>
      <?php
         $dia = isset($_GET["ds"]) ? $_GET["ds"] : 0;
         switch ($dia) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
               echo "Levanta e vai estudar pequeno gafanhoto!";
               break;
            case 7:
            case 8:
               echo "Descanse, jovem aprendiz!";
               break;
            default:
               echo "Dia da semana inválido!";
         }
      ?>
      <br>
      <a href="javascript:history.go(-1)"> <small>Voltar</small> </a>
   </div>
</body>
</html>

