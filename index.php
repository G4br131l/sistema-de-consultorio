<?php 
include("sql/bd.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <div>
        <h1>Entrar:</h1>
        <form action="index.php" method="post" id="form">
            <label for="">Usuario:</label><br>
            <input type="text" name="usuario" id=""><br>
            <label for="">Senha:</label><br>
            <input type="password" name="senha" id=""><br>
            <input type="submit" value="Entrar">
        </form>
    </div><br>
    <a href="cadastro.php">não tenho conta</a>
</body>
</html>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

        $existe = procurarUsuario($usuario, $senha, $conn);

        if ($existe) {
            header("Location: menuUsuario.php");
            exit;
        }
    }

    mysqli_close($conn);
?>