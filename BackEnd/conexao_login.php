<?php
//Conexão

    $Host = "localhost";
    $User = "root";
    $Pass = "";
    $db = "cadastro";

    $conn = new mysqli($Host, $User, $Pass, $db);

        if($conn->connect_error) {
            echo "Falha oa conectar:";
        } else {
            echo "Conexão efetuada com sucesso:";
        }


?>