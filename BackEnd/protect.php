<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessr esta página parque não está logado. <p><a href=\"pag03.html\">Entrar</a></p>");
}

?>