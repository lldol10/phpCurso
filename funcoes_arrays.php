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
  /*
    $array = array('notebook' , 'teclado');
    $retorno = is_array($array);


    if($retorno){
        echo 'é um array';
    }else{
        echo 'não é um array';
    }
    */

    /*
    $array = [ 1 => 'a', 7 => 'b', 18 => 'c'];

    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $chaves_array = array_keys($array);
    echo '<pre>';
    print_r($chaves_array);
    echo '</pre>';
    */

    /*
    $array = array('notebook' , 'teclado', 'mouse', 'cabo hdmi', 'fonte ATX', 'teclado vermelho');
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    sort($array);
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    */
/*
    $array = array('notebook' , 'teclado', 'mouse', 'cabo hdmi', 'fonte ATX', 'teclado vermelho');
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    asort($array);
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    */

    /*
    $array = array('notebook' , 'teclado', 'mouse', 'cabo hdmi', 'fonte ATX', 'teclado vermelho', 'mesa');
    echo '<pre>';
    print_r($array);
    echo count($array);
    echo '</pre>';
    */

    /*
    $array1 = ['SX', 'Win'];
    $array2 = ['Linux'];
    $array3 = array('Solaris');

    $novo_array = array_merge($array1, $array2, $array3);
    echo '<pre>';
    print_r($novo_array);
    echo '</pre>';
    */

    $string = '26/04/2021';

    $array_retornado = explode('/', $string);
    echo '<pre>';
    echo $string;
    print_r($array_retornado);
    echo '</pre>';






  ?>

 

 
</body>
</html>