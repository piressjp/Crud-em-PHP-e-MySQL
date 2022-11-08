<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="?page=novo">Novo Usuário</a>

            <a class="nav-link" href="?page=listar">Listar Usuários</a>
        </div>
        </div>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case 'novo':
                        include("novo-usuario.php");
                        break;
                        
                    case 'listar':
                        include("listar-usuarios.php");
                        break;

                    case 'salvar':
                        include("salvar-usuarios.php");
                        break;

                    case 'editar':
                        include("editar-usuario.php");
                        break;

                    default:
                        print "<h1>Bem vindo!</h1>";

                }
            ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>