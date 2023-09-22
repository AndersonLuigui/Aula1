<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
   <?php class Pessoa {
    //Atributos
    public $nome = "Anderson";
    public $idade = 26;
    public $endereco = "Quadra 12";


    //Métodos
    function imprimePessoa(){
        return "Nome: {$this->nome}<br> Idade: {$this->idade} <br> Endereço: {$this->endereco}";
    }
   }


   $p1 = new Pessoa();
   echo $p1 -> imprimePessoa();




   ?>
    
</body>
</html>