<?php

//Incluir o arquivo de conexão
include("../Connection/conexao.php");

//Obter o usuário e a senha
$usuario = $_POST["login"];
$senha = $_POST["senha"];

//SQL para verificar se é um administrador
$sql = "SELECT * FROM administradores WHERE login = '" . md5($usuario) . "' AND senha = '" . md5($senha) . "'";

//Executar o comando SQL
$resultado = mysqli_query($conexao, $sql);

//Obter a quantidade de registros
$qtd = mysqli_num_rows($resultado);

//Redirecionamento
if ($qtd != 0) {

    //Iniciar a sessão
    session_start();

    //Criar a sessão
    $_SESSION["sessaoADM"] = "sessaoADM";
    //$_SESSION["sessaoADM"] = "kkk eae man";

    header("Location:../administrador.php");
} else {
    //SQL para verificar se é um usuário normal
    $sql = "SELECT * FROM usuarios WHERE loginUsuario = '" . md5($usuario) . "' AND senhaUsuario = '" . md5($senha) . "'";

    //Executar o comando SQL
    $resultado = mysqli_query($conexao, $sql);

    //Obter a quantidade de registros
    $qtd = mysqli_num_rows($resultado);

    //redirecionamento
    if ($qtd != 0) {

        //Iniciar a sessão
        session_start();
        
        //Adicionar informações do usuário na sessão
        $result = mysqli_fetch_row($sql);
        while ($fetch = mysqli_fetch_row($result)) {
            
            //Criar a sessão
            $_SESSION["sessaoUsuario"] = $fetch[0];
            $_SESSION["sessaonomeUsuario"] = $fetch[1];
            $_SESSION["sessaoInstrumentoUsuario"] = $fetch[5];
            //$_SESSION["sessaoUnidadeFederativaUsuario"] = $fetch[0];
            $_SESSION["sessaoEstadoUsuario"] = $fetch[6];
            $_SESSION["sessaoEmailUsuario"] = $fetch[4];
            $_SESSION["sessaoCidadeUsuario"] = $fetch[7];
            $_SESSION["sessaoDataNascimentoUsuario"] = $fetch[10];

            header("Location:../meuPerfil");
        }
    }
}


        
