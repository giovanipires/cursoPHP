<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>01 Exercicio switch</title>
</head>
<body>
   <div>
      <?php
         $number = isset($_GET["num"]) ? $_GET["num"] : 0;
         $oper = isset($_GET["oper"]) ? $_GET["oper"] : 1;
         switch ($oper) {
            case 1:
               $res = $number * 2;
               break;
            case 2:
               $res = pow($number,3);
               break;
            case 3:
            $res = sqrt($number); // $number ^ (1/2);
         }
         echo "O resultado da operação solicitada foi <strong>$res</strong>.";
      ?>
      <br>
      <a href="01exercicio.html"> <small>Voltar</small> </a>
   </div>
</body>
</html>

