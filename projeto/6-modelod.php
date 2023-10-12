<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="estilos/paginicial.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-image: linear-gradient(to right,#5b7cba,#7f95c8,#9faed6,#bfc9e3,#dfe3f1, #fff )">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nossoMenu" 
                 aria-controls="nossoMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#"><img src="img/logo.png" width="150px"></a>
            <div class="collapse navbar-collapse" id="nossoMenu">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active" >
                        <a class="nav-link" href="2-login.php">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="3-cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Consulta de Usuário</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="6-google ver calls.html">Modelo do DB</a>
                    </li>
                    <li> 
                        <button class="btn btn-danger" type="button" onclick="sair()">Sair</button>
                    </li>

                   
                </ul>
            </div>
        </nav>
    </header>

    <div class="container w-50 p-10 text-center align-middle">   
        <h1> Modelo de Banco de Dados</h1>
        <br>
        <h2> Modelo de Relacionamento De Entidade
        <img class="img-fluid"  src="img/modeloER.png" alt="centro">
        <h2> Modelo Lógico </h2>
        <img class="img-fluid"  src="img/modelologico.png" alt="modelologico">

    </div>
    <footer>
        <img id="imglogo" src="img/logo.png" width="80"/>
    </footer> 
</body>
</html>
