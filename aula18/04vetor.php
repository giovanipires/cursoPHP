<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | vetor 02</title>
</head>
<body>
   <div>
      <h2>Falando de vetores</h2>
      <pre>
         <?php
            $vetor = array(1=>"A", 3=>"B", 5=>"C", 7=>"D");
            print_r($vetor);
            echo "<br/><br/>";
            $vetor[] = "E";
            print_r($vetor);
            echo "<br/><br/>";
            unset($vetor[8]);
            print_r($vetor);
            echo "<br/><br/>";
         ?>
      </pre>
   </div>
</body>
</html>
