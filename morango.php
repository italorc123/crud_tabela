<?php

class Morango extends Fruta {
    // extends = herança da classe desejada
    public $peso;
    // uma classe filha pode ter propriedades proprias
    // herda todas as propriedades e metodos da classe pai
    
    function __construct($nome, $cor, $peso)
    // sobrescrever metodos da classe pai eh possivel   
    // com seus proprios argumentos
    {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->peso = $peso;
    }

    function intro()
    // sobrescrever metodos da classe pai eh possivel
    {
        echo "Eu sou um $this->nome";
    }
    public function mensagem(){
        echo "Sei la";
    }
}






?>