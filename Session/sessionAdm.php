<?php

//iniciar sessão
session_start();

//verifica se há sessão
if(!isset($_SESSION["sessaoADM"])){
    header("Location:index.php");
}

?>