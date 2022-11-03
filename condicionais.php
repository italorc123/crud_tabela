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


    $idade = 71;
    $nome = "Pedro";

    if ($idade >= 18 && $idade < 70){
        echo "VOTO OBRIGATORIO";
    } else if ($idade >= 16) {
        echo "VOTO OPCIONAL";
    }  else {
        echo "NAO VOTA";

      }
     
    echo "<br>";
    if ($idade > 18 || $nome == "Maria"){
        echo "ENTRA NO CLUBE";
    } else {
        echo "NAO ENTRA";
    }
    echo "<br>";


    $corFav;

    switch ($corFav){
        case "Vermelho":
            echo "Cor Favorita é Vermelho";
            break;
        case "Azul":
            echo "Cor Favorita é Azul";
            break;
            default:
            echo "Opcao Invalida";
            echo "<br>";
    }
    
    echo "<br>";
    // laços de repeticao ou loops

    $contador = 0;

    while ($contador<10){
        echo "Sou menor que dez, meu valor é $contador";
        $contador++;
    }
    
    do {
        echo "Sou menor que dez , meu valor é $contador <br>";
        $contador++;
    }while ($contador < 10);

    echo $contador;

    for ($i = 0; $i < 10; $i++){
        echo "Sou menor que dez , meu valor é $i<br>";
    }

    $cores = array("vermelho", "azul", "verde", "amarelo" );

    foreach ($cores as $cor){
        echo "$cor <br>";
    }
    





?>
</body>
</html>