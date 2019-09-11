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
            $v = array("B", "U", "N", "D", "A");
            $total = count($v); //uma função para o somatório
            echo "O vetor tem " . $total . " elementos. <br/>";
            print_r($v);
            //var_dump($v); //outro formato de apresentar vetor em tela;
         ?>
      </pre>
   </div>
</body>
</html>
