<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <title>Cadastro de Clientes</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro de Clientes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo cliente</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=lista">Lista de cliente</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class = "container">
        <div class = "row">
            <div class= "col mt-5">
                <?php
                    include ("config.php");
                    switch(@$_REQUEST["page"]){
                    case "novo":
                        include ("novo-usuario.php");
                    break; 
                    case "lista":
                        include ("lista-usuario.php");
                    break;
                    case "salva":
                        include ("salva-usuario.php");
                    break; 
                    case "altera":
                        include ("altera-usuario.php");
                    break;  
                    default:
                     print  "<h1>Olá, seja bem-vindo!</h1>";    

                   }
                ?>
            </div>
        </div>
    </div>
   
   
    <script src="bootstrap.bundle.min.js"></script>

    
  </body>
</html>