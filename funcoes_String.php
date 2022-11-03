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

    $texto = "Hello word";

    echo strlen($texto); // retorna o tamanho da string
    echo "<br>";
    echo str_word_count($texto); // contagem de palavras
    echo "<br>";
    echo strrev($texto); // inverte a string
    echo "<br>";
    echo strpos($texto, "World"); // retorna a posicao de uma substring
    echo "<br>";
    echo str_replace("Hello","Olá", $texto);
    echo "<hr>";

    $numero = 10;
    echo is_int($numero); // retorma 1 par inteiros
    echo "<br>";
    $numero = "Dez";
    echo is_string($numero); // retorna 1 para string
    $numero = 2.8;
    echo is_nan($numero);

    $numero = 2.8;
    echo $numero;
    echo "<br>";
    echo (int)$numero; // casting para valor INTEIRO
    echo "<hr>";


    echo pi(); // retorna o valor de pi
    echo "<br>";
    echo min(0, 25, 2); // retorna  o valor e tem o oposto max()
    echo "<br>";
    echo abs(-12321); // retorna o valor absoluto
    echo "<br>";
    echo sqrt(64); // retorna o valor da raiz quadrada
    echo "<br>";
    echo round(0.8); // o valor é arredondado
    echo "<br>";
    echo rand(); // gera um valor aleatorio // pode ser configurado limites rand(menor, maior)
    echo "<hr>";
    define("PI", 3.14);
    echo PI;
    echo "<hr>";
    //  + adicao, - subtracao, * multiplicacao, / divisao, % modulo ou resto, **exponeciacao // comparativos // == igual,
    //==(valor e tipo), != diferente <> // !== nao identico, > maior que, < menor que// >= maior igual, <= menor igual, // logicos // and && e . 
    //para ser obrigado a votar vc temq ter mais de 18 e menos de 70
       // pessoas com 50 anos...testes: 50 > 18 T e 50 < 70 T, logo obrigado a votar T
       // pessoas com 90 anos...testes: 90 > 18 T e 90 < 70 F, logo obrigado a votar F
       // pessoas com 15 anos...testes: 15 > 18 F e 15 < 70 T, logo obrigado a votar F
    // or ||ou
       // para entar em um determinado clube vc tem que
       // ou ter mais de 18 anos ou se chamar "maria"
       // "joao" de 19 anos...testes: 19 > 18 T ou "Maria" == "Joao" F
       // logo Joao pode entar por ter passado no teste da idade
       // "Maria" de 15 anos...testes: 15 > 18 F ou "Maria" == "Maria" T
       // logo Maria pode entrar por ter passado no teste do nome 
       // "Pedro" de 10 anos...testes: 10 > 18 F ou "Maria" == "Pedro" F
       // logo Pedro nao pode entrar por ter nao  passado em nenhum teste
       

       



</body>
</html>