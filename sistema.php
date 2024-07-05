<?php
session_start();
//print_r($_SESSION);

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email'] );
    unset($_SESSION['senha']);
    header('Location: login.php');

} 
    $logado = $_SESSION['email'];


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
           body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,rgb(20,147,220), rgb(17,54,71));
            overflow-y: hidden;
            overflow-x: hidden;
            margin: 0px;
            color: white;
            text-align: center;
        }
        header{
            background-color: rgba(0, 0, 0, 0.7);
            min-height: 150px;
            padding-top: 40px;
            margin: 0;
            text-align: right;
        }

        nav h1{
            margin: 00;
            padding: 40px;
        }

        nav a{
            color: white;
            border: 1px solid dodgerblue;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0px 1px rgba(0, 0, 0, 0.4);
            

        }

       
    </style>
</head>
<body>
    <header>
        <nav>
        <a href="home.php">Sair</a>
        </nav>
    </header>

    <h1>Acessou o sistema</h1>

    <div class="card" style="width: 18rem;">
  <img src="img.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="home.php" class="btn btn-primary"></a>
  </div>
</div>
    

</body>
</html>