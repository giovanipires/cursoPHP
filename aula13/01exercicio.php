<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>01 exercício FOR</title>
</head>
<body>
   <div>
      <h2>Aprendendo o FOR no PHP</h2>
      <?php
        for ($i=0; $i <= 10 ; $i++) { 
           echo "$i ";
        }

         echo "<br/>";

         for ($i=10; $i >=0 ; $i--) { 
            echo "$i ";
         }

         echo "<br/>";

         for ($i=0; $i <=50; $i+=5) { 
            echo "$i ";
         }

         echo "<br/>";

         for ($i=20; $i >=0; $i-=2) { 
            print "$i ";
         }

      ?>
      <br><br>
      <!-- <input type="button" class="myButton" value="Recarregar" onClick="window.location.reload()"> -->
      <a href="03exercicio.html" class="myButton"> <small>Recarregar</small> </a>
   </div>
</body>
</html>