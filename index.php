<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Muzart</title>

        <!-- jQuery -->
        <script src="JS/jquery.js"></script>

        <!-- Bootstrap -->
        <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootscrap/js/bootscrap.js"></script>

        <!-- Estilos -->
        <link href="CSS/estilos.css" rel="stylesheet" type="text/css" />

        <link rel="icon" href="assets/Logo.png" type="image/x-icon" />
        <link rel="shortcut icon" href="assets/Logo.png" type="image/x-icon" />

    </head>
    <body class="colortop">

        <div id="mensagemLogin">

            <?php
            //Incluir Msg
            include("./Include/msg.php");
            ?>

        </div>
        <div class="tudoIndex">

            <div id="divTotalLogin">
                <div class="divLogoLogin">

                    <img style="width: 50%;" src="assets/Logo.jpg" />

                </div>
                <div class="dadosFormulario">
                    <form id="formularioLogar" action="Actions/validarLogin.php"
                          onsubmit="return validaLogin()" method="post">

                        <input type="text" placeholder="Login"
                               class="form-controlEstilo loginLogin" name="login"> <input
                               type="password" placeholder="Senha"
                               class="form-controlEstilo senhaLogin" name="senha"> <label
                               type="text" id="mensagem" name="mensagem"></label>
                </div>
                <div class="divFormularioBotoes">
                    <input type="submit" value="Entrar" id="botaoLogarLogin"
                           class="btn btn-primary boxShadowbtn">

                    </form>
                    <p id="labelOULogin">ou</p>
                    <form action="cadastrar.jsp?msg=nadaAdeclarar" method="post">
                        <input type="submit" id="botaoCadastrarLogin" value="Cadastrar"
                               class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
