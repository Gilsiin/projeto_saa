<?php
//login

    $conn = mysqli_connect("localhost", "root", "", "login");

        if (!$conn) {
            die("Erro ao conectar ao banco de dados" . mysqli_connect_error());
        }


?>