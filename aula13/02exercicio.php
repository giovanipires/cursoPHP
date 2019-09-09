<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Taboada com FOR</title>
</head>
<body>
   <div>
      <h1>Exercício 02 | Taboada com FOR</h1>
      <form method="get" action="02-taboada.php">
         <select name="num">
            <?php
               for ($i=1; $i<=10; $i++) { 
                  echo "<option>$i</option>";
               }
            ?>
         </select>
         <input type="submit" value="Tabuada" class="myButton"/>
      </form>
      <br>
      <!-- <input type="button" value="Recarregar" onClick="window.location.reload()"> -->
      <!-- <a href="01exercicio.html"> <small>Voltar</small> </a> -->
   </div>
</body>
</html>

