<?php

//iniciar sessão
session_start();

//verifica se há sessão
if(!isset($_SESSION["sessaoUsuario"])){
    header("Location:index.php");
}

?>