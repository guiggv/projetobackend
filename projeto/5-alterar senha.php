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

                <legend><b>Alteração de Senha</b></legend>
                    <legend>Escolha um metodo de verificação:</legend> <p></p> </br>

                    <label for="asenha">Senha atual:</label> </br>
                        <input class="text-center" id="asenha" type="password" size="10" maxlength="8" id="senha" placeholder="Digite a senha atual."></br>    
                    <p></p>

                    <label for="asenha">Senha nova:</label> </br>
                        <input class="text-center" id="asenha" type="password" size="10" maxlength="8" id="senha" placeholder="Digite a senha desejada."></br>    
                    <p></p>

                    <div id="enter">
                        <td><input type="submit" class="button button1" value="Prosseguir"></td></br>
            </form>
        </section>
                <p><a href="2-login.php"><b>Retornar</b></a></p>
                <p></p>
        </div>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <img id="imglogo" src="img/logo.png" width="80"/>
    </body>
    
