<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Funções Prontas | quebras de linhas</title>
</head>
<body>
   <div>
      <h2>Testando funções existentes</h2>
      <?php
        $txt = "Este é um exemplo de string gigante que vai mostrar o funcionamento da função wordwrap..."; 
        $res = wordwrap($txt, 5, "<br>\n", false);
        echo $res;
      ?>
   </div>
</body>
</html>

<!-- 
%d = valor decimal (positivo ou negativo)
%u valor decimal sem sinal (apenas positivos)
%f valor real
%s string 
-->