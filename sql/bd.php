<?php 

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "tests";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if($conn) {
        echo "tudo certo";
    }

    function procurarUsuario($usuario, $senha, $conn) : bool {
        if (empty($usuario) || empty($senha)) {
            echo "prencha os input's";
        } else {
            try {
                $sql = "SELECT * FROM users WHERE user = {$usuario} AND password = {$senha}";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) != 0) {
                    return true;
                }
            } catch(mysqli_sql_exception) {
                return false;
            }
        }
    }
?>