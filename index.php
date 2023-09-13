<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
   <?php
        function CadastroCliente($nome, $idade, $endereco){
            return $array = [$nome, $idade, $endereco];
        }

        function imprimeCadastro($array){
            print_r($array);
        }

        $cliente = CadastroCliente("Anderson", 26, "Gama-DF");
        imprimeCadastro($cliente);

   ?>
    
</body>
</html>