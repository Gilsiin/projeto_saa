<?php

    //login

    $conn = mysqli_connect($Host, $User, $Pass, $db);

        if (!$conn) {
            die("Erro ao conectar ao banco de dados" . mysqli_connect_error());
        }


?>