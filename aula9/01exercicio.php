<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>01 Exercicio IF</title>
</head>
<body>
   <div>
      <?php
         $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
         $anoAtual = date("Y");
         $idade = $anoAtual - $ano;
         echo "Você nasceu em $ano e sua idade é $idade. <br>";
         if($idade >= 18) {
            $voto = "já pode votar";
            $dirigir = "já pode dirigir";
         }
         else {
            $voto = "não pode votar";
            $dirigir = "não pode dirigir";
         }
         echo "Com esta idade você $voto e $dirigir. <br>"
      ?>
      <br>
      <a href="01exercicio.html"> <small>Voltar</small> </a>
   </div>
</body>
</html>

