<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | vetor 05</title>
</head>
<body>
   <div>
      <h2>Falando de vetores</h2>
      <pre>
         <?php
            $cad = array(
               "nome" => "ana",
               "idade" => 23,
               "peso" => 49.5
            );
            print_r($cad);
            echo "<br/><br/>";
            $cad["fuma"] = true;
            print_r($cad);
            echo "<br/><br/>";
            foreach ($cad as $key => $value) {
               echo "<p>O valor de $key é $value</p>";
            }
         ?>
      </pre>
   </div>
</body>
</html>
