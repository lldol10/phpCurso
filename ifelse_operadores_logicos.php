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

//operadores condicionais / comparação
//==
//===
//!= ou <>
//!==
//<
//>
//<=
//>=

//E: && ou AND -> retorna verdadeiro se todos os resultados forem verdadeiros
//OU: || ou OR -> retorna verdadeiro se pelo menos um resultado for verdadeiro
//XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeiro
//!: -> inverte o resultado retornado pela expressão


if( 5 == 5 && 10 > 3){
    echo 'verdadeiro';
}else{
    echo 'falso';
}

echo '<br>';

if(5 == 5 || 10 > 15){
    echo 'verdadeiro';
}else{
    echo 'Falso';
}

echo '<br>';

if(7 >= 4 XOR 20 > 15){
    echo 'verdadeiro';
}else{
    echo 'falso';
}

echo '<br>';

if(!('b' == 'b')){
    echo 'verdadeiro';
}else {
    echo 'falso';
}
?>

</body>
</html>