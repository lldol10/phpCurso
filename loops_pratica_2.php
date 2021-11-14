<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $funcionarios = [['nome' => 'Luan', 'salario' => 5000], ['nome' => 'Renato', 'salario' => 3000], ['nome' => 'Alex', 'salario' => 4000]];
    

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    /* foreach($funcionarios as $idx => $nome_funcionario){
        echo "ID {$idx} - Nome: {$nome_funcionario}  <br />";
        
    } */
    foreach($funcionarios as $idx => $nome_funcionario){
        foreach($nome_funcionario as $idx => $valor){
            echo "$idx - $valor <br />";
        }
        echo "<hr />";
    }

    ?>
</body>

</html>