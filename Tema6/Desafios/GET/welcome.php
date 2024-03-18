<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <?php
    if(isset($_GET['nome'])) {

	//código aqui<?php
    $nome = $_GET["nome"];
    echo "nome: " . $nome;
    echo "<h2>seja bem-vindo,$nome!</h2>";
    }
?>
    
</body>
</html>
