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
            //$v[] = "S";
            array_push($v, "S"); //incluir elemento na pilha, no final
            print_r($v);
            echo "<br/><br/>";
            array_pop($v); //remove elemento na pilha, do final
            print_r($v);
         ?>
      </pre>
   </div>
</body>
</html>
