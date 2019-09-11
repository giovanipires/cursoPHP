<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | Funções de vetores</title>
</head>
<body>
   <div>
      <h2>Falando de vetores</h2>
      <pre>
         <?php
            $v = array(8, 7, 4, 5, 2, 1, 3, 6);
            print_r($v);
            echo "<br/><br/>";
            asort($v); //ordenar array de forma associativa, ou seja, mantendo a ordem dos indices
            print_r($v);
            echo "<br/><br/>";
            arsort($v); //ordenar array de forma associativa reversa, ou seja, mantendo a ordem dos indices
            print_r($v);
         ?>
      </pre>
   </div>
</body>
</html>
