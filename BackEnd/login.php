<?php
//login

    $conn = mysqli_connect("localhost", "root", "", "login");

        if (!$conn) {
            die("Erro ao conectar ao banco de dados" . mysqli_connect_error());
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if ($email == "Admin" && $senha == "admin") {
            header("Location: /projeto_saa/pag03.html");
            exit();
        } else {
            echo "Credenciais inválidas. Tente novamente.";
        }

        $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        $resultado = $conn->query($sql);

            if ($resultado->num_rows > 0) {
                echo "Login bem-sucedido!";
            } else {
                echo "Email ou senha incorretas!";

            }
        }
            $conn->close();


?>