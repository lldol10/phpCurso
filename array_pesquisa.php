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
   $lista_frutas = ['banana', 'maça', 'morango', 'uva'];

 

  // echo in_array('maça', $lista_frutas);

    $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['MAria', 'Paulo']];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo in_array('uva', $lista_coisas['frutas']);
  ?>

 

 
</body>
</html>