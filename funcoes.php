<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
 
    function exibirBoasVindas(){
        echo 'boas vindas';
    }

    function calcularAreaTerreno($largura, $comprimento){
        $area = $largura * $comprimento;
        return $area;
    }

    exibirBoasVindas();
    echo calcularAreaTerreno(15, 30);





  ?>

 
</body>
</html>