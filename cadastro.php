<?php 
    include("sql/bd.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <h1>cadastro</h1>
        <form action="" method="post">
            <label for="">Usuario:</label><br>
            <input type="text" name="usuario" id=""><br>
            <label for="">Senha:</label><br>
            <input type="password" name="senha" id=""><br>
            <input type="submit" value="Entrar">
        </form>
    </div>
    <a href="index.php">voltar</a>
</body>
</html>