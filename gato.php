<?php
require_once "../animal.php";
require_once "../terrestre.php";
// indicar qual o arquivo que contem a classe que sera 
// utilizada para a herança
class Gato extends Animal implements Terrestre{
    public function fazBarulho()
    // implementar obrigatoriamente o metodo vindo da classe pai
    {
        echo "Miau";
    }
    public function locomove()
    {
        echo "Andando";
    }
}




?>