<?php0
require_once 'pessoas.php';
require_once 'conexao.php';

$id_pessoa = $_POST['id_pessoa'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

try {
    $pessoa = new Pessoa($id_pessoa);
    $pessoa->nome = $nome;
    $pessoa->idade = $idade
    
    $pessoa->atualizar();

    setcookie("atualizado", true);
    header("location: index.php");
} catch (PDOException $e){
    echo $query . "<br>" . $e->getMessage();

}






?>