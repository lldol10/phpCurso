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
    $lista_frutas = array('banana', 'maça', 'morango', 'uva', 'abacate');
    $lista_frutas[] = 'acerola';
  echo '<pre>';
  var_dump($lista_frutas);
  echo '</pre>';
  echo '<hr>';
  echo '<pre>';
  
  print_r($lista_frutas);
  echo '</pre>';

  echo '<br>';
  echo $lista_frutas[3];
  ?>

 

 
</body>
</html>