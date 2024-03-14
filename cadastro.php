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
        <form action="cadastro.php" method="post" id="form">
            <label for="">Usuario:</label><br>
            <input type="text" name="usuario" id=""><br>
            <label for="">Senha:</label><br>
            <input type="password" name="senha" id=""><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
    <a href="index.php">voltar</a>
</body>
</html>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

        $adicionado = addUsuario($usuario, $senha);

        if ($adicionado) {
            echo"adicionado";
        } else {
            echo"nada";
        }
    }
?>