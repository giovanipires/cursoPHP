<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | vetor 07</title>
</head>
<body>
   <div>
      <h2>Falando de vetores</h2>
      <pre>
         <?php
            $v = array(
                        array(6,4),
                        array(4,9),
                        array(3,2)
                        );
            $v[0][1] = $v[2][0];
            print_r($v);
         ?>
      </pre>
   </div>
</body>
</html>
