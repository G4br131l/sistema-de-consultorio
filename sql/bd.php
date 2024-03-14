<?php 

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "tests";

    $connect_db = [$db_server, $db_user, $db_pass, $db_name];
    

    function procurarUsuario($usuario, $senha) : bool {
        try {
            global $connect_db;

            if (empty($usuario) || empty($senha)) {
                echo "prencha os input's";
            } else {
                try {
                    $conn = mysqli_connect(...$connect_db);

                    $sql = "SELECT * FROM users WHERE user = {$usuario} AND password = {$senha}";

                    $result = mysqli_query($conn, $sql);

                    mysqli_close($conn);

                    if (mysqli_num_rows($result) != 0) {
                        return true;
                    }
                } catch(mysqli_sql_exception) {
                    return false;
                }
            }
        } catch(mysqli_sql_exception) {
            return false;
        }
    }

    function addUsuario($usuario, $senha): bool {
        try {
            echo"dentro";
            global $connect_db;

            if (empty($usuario) || empty($senha)) {
                echo "prencha os input's";
            } else {
                try {
                    $conn = mysqli_connect(...$connect_db);

                    $sql = "INSERT INTO users (user, password) VALUES ({$usuario}, {$senha})";

                    $result = mysqli_query($conn, $sql);

                    echo"tudo ok";

                    mysqli_close($conn);

                    return $result;
                } catch(mysqli_sql_exception) {
                    return false;
                }
            }
        } catch(mysqli_sql_exception) {
            return false;
        }
    }
?>