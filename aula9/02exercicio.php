<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/estilo.css">
   <title>02 Exercicio IF</title>
</head>
<body>
   <div>
      <?php
         $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
         $anoAtual = date("Y");
         $idade = $anoAtual - $ano;
         echo "Você nasceu em $ano e sua idade é $idade. <br><br>";
         if($idade < 16) {
            $tipoVoto = "não pode votar";
            $dirigir = "não pode dirigir";
         }
         else {
            if (($idade >= 16 && $idade < 18) || ($idade > 65)) {
               $tipoVoto = "voto opicional";
               $dirigir = "dirigir não é uma opção inteligente";
            }
            else {
               $tipoVoto = "voto obrigatório";
               $dirigir = "ja pode tirar a carteira e dirigir";
            }
         }
         echo "Para esta idade $tipoVoto e $dirigir. <br>"
      ?>
      <br>
      <a href="02exercicio.html"> <small>Voltar</small> </a>
   </div>
</body>
</html>

