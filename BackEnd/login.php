<?php
//login

    $conn = mysqli_connect("localhost", "root", "", "login");

        if (!$conn) {
            die("Erro ao conectar ao banco de dados" . mysqli_connect_error());
        }

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        $resultado = $conn->query($sql);

            if ($resultado->num_row > 0) {
                echo "Login bem-sucedido!"
            } else {
                echo "Email ou senha incorretas!"

            }

            $conn->close();


?>