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
    $idade = 16;
    $peso = 49 ;

    if ($idade >= 16 && $idade <= 69 && $peso >= 50){
        echo "Voce pode doar sangue";
    }else {
        echo   'lamento, voce nao pode doar';
    }
  ?>

 
</body>
</html>