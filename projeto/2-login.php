<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">
        <title>Pagina Login</title>
        <link href="estilos/telecall.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script type="text/Javascript" src="script/login.js"></script>
    </head>
    <body>

        <a href="1-pagina inicial.html"><img id="imgmodavo" src="img/modavologo2.png" width="200"/></a>

        <p></p>

        <div class="container w-50 p-10 text-center align-middle">    
            <form action="#" method="post" onsubmit="return validarDados();">

                <legend><b>Seja bem vindo</b></legend>
                    <legend>Área de Acesso</legend>
                        <label for="fname">Login:</label> </br>
                            <input class="text-center" id="fname" type="text" size="10" maxlength="8" placeholder="Digite o login"></br>
                        <P></P>

                        <label for="fsenha">Senha:</label> </br>
                            <input class="text-center" id="fsenha" type="password" size="10" maxlength="8" id="senha" placeholder="Digite a senha"></br>    
                        <p></p>

                    <div id="enter">
                        <td><input type="submit" class="button button1" value="Entrar"></td></br>
            </form>
        </section>
                <p><a href="3-cadastro.php"><b>Novo cadastro</b></a></p>
                <p></p>
                <p><a href="#"><b>Esqueci minha senha</b></a></p>
        </div>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <img id="imglogo" src="img/logo.png" width="80"/>
    </body>
    
