<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | ucwords</title>
</head>
<body>
   <div>
      <h2>Testando funções existentes</h2>
      <?php
        $nome = "giovani pires";
        $nome2 = ucwords($nome);
        echo "Seu nome é $nome2 <br>";
      //   $nome3 = ucfirst(strtolower($nome));
      //   echo "Seu nome é $nome3 <br>";
      ?>
   </div>
</body>
</html>
