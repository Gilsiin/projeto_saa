<?php
 // Conexão com o banco de dados
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "saa";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

 // Armazena a foto no servidor
 $target_dir = "fotos/";
 $target_file = $target_dir . basename($_FILES["foto"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

 // Verifica se a foto é real e se é da extensão correta
 if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
      echo "Arquivo é uma imagem - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "O arquivo não é uma imagem.";
      $uploadOk = 0;
    }
 }

 // Tenta mover a foto para o servidor
 if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
      echo "A foto " . htmlspecialchars(basename($_FILES ["foto"]["name"])) . " foi enviada.";
    } else {
      echo "Houve um erro ao enviar a foto.";
    }
 }

 // Insere os dados no banco de dados
 $matricula = $_POST["matricula"];
 $problema = $_POST["problema"];
 $localizacao = $_POST["localizacao"];
 $foto = $_FILES["foto"]["name"];

 $sql = "INSERT INTO chamados (matricula, problema, localizacao, foto)
 VALUES ('$matricula', '$problema', '$localizacao', '$foto')";

 if ($conn->query($sql) === TRUE) {
    echo "Registro criado com sucesso";
 } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
 }

 $conn->close();
?>