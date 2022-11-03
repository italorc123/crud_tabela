<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ola mundo

    <?php

    echo "Ola mundo<br>";

    $texto = "isso eh string<br>";
    $num_int = 10;
    $num_real = 2.3;

    echo "o q eh isso? $texto<br>";
    echo "o que isso? " . $texto . "<br>";
    echo $num_int + $num_real;

    $x = 5;

    function minhaFuncao(){
        global $x;
        $y = 10;
        echo "a variavel x é $x dentro da funcao" ;
        echo $y;
        $y++;
    }
    minhaFuncao();
    minhaFuncao();
    minhaFuncao();

    //echo "a variavel x é $x fora da funcao";

    ?>

 

  

</body>
</html>