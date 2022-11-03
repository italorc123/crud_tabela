<?php
require_once 'conexao.php';
require_once 'pessoas.php';


// Criando Banco de Dados
try {
    $conn = conexao::conectar();
    $sql = "CREATE DATABASE IF NOT EXISTS meuPDO";
    // Cria o banco SE ele NAO EXISTE
    $conn->exec($sql);
    echo "Banco de dados Criado com sucesso <br>";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
//-------------------------------------------------
//criando tabelas

try {
    
    $conn = Conexao::conectar();
    $sql = "CREATE TABLE IF NOT EXISTS pessoas (
        id_pessoa INT(6) AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR (255),
        idade INT(3),
        data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP)";
        
        $conn->exec($sql);
        echo "Tabela Pessoas criada com sucesso <br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
//---------------------------------------------------------------------------
// listando via classe
if(isset($_GET['busca'])){
    $palavra = $_GET['busca'];
    try{
        $pessoa = new Pessoa();
        $lista = $pessoa->listarPorNome($palavra);
    } catch (Exception $e){
        echo $e->getMessage();
    }
} else {
try{
    $pessoa = new Pessoa();
    $lista = $pessoa->listar();
} catch (Exception $e){
    echo $e->getMessage();
}
}













?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div id="exibe"></div>
    <div class="flex-container"></div>
        <div>
    <button id="btn_criar"><a href="criar_pessoa.php"><span class="material-symbols-outlined">person_add</span></a></button>
        </div>
    <div>
        <form action="index.php">
            <input type="search" name="busca" id="busca">
            <input type="submit" value="buscar">
        </form>
    </div>
    <?php if(count($lista)>0): ?>
    <fieldset>
    <table>

        <tr>
            <th>id</th>
            <th>nome</th>
            <th>idade</th>
            <th>registro</th>
        </tr>
        </fieldset>
        <?php foreach($lista as $item): ?>
            <!-- foreach para percorrer cada elemento
             da lista gerada e criar a TR abaixo para cada um deles -->
            <tr>
                <td><?=$item['id_pessoa']?></td>
                <!-- preenchendo o valor de cada TD da tabela
                com o valor referente ao item atual indicando sua chave -->
                <td><?=$item['nome']?></td>
                <td><?=$item['idade']?></td>
                <td><?=$item['data_registro']?></td>
                <td><a href="delete.php?id_pessoa=<?=$item['id_pessoa']?>"><span class="material-symbols-outlined">Delete</span></a></td>
                <td>
                    <a href="editar.php?id_pessoa=<?=$item['id_pessoa']?>"><span class="material-symbols-outlined">edit</span></a>
                </td>
            </tr>
            <?php endforeach ?>    
            <!-- devemos finalizar o laço foreach -->

    </table>
    <?php else: ?>
        <p>
            nao tem pessoas cadastratadas

        <p>
    
        <?php endif ?>
    
</body>
</html>