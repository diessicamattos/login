<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>

    <style>


        
        .login{
            background-color: rgba(0, 0, 0, 0.3);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        input{
            padding: 15px;
            border: none;
            outline: none;
            border-radius: 10px;
            font-size: 15px;
        }

        .inputsubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            font-weight: bold;
        }

        .inputsubmit:hover{
            background-color: deepskyblue;
            color:rgba(0, 0, 0, 0.6) ;
            cursor: pointer;
        }

        a{
           color: white; 
           text-decoration: none;
        }

        .voltar{
            color: white;
            border: 1px solid dodgerblue;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0px 1px rgba(0, 0, 0, 0.4);
        }

        .voltar:hover{
            color: white;
            font-size: bold;
            box-shadow: 1px 1px 1px deepskyblue;
        }
    </style>
</head>
<body>
    <br>
<a class="voltar" href="home.php">Voltar</a>
<div class="container">

        <div class="bolhas">
            <span style="--i:11"></span>
            <span style="--i:17"></span>
            <span style="--i:25"></span>
            <span style="--i:14"></span>
            <span style="--i:23"></span>
            <span style="--i:16"></span>
            <span style="--i:24"></span>
            <span style="--i:19"></span>
            <span style="--i:13"></span>
            <span style="--i:27"></span>
            <span style="--i:18"></span>
            <span style="--i:30"></span>
            <span style="--i:19"></span>
            <span style="--i:29"></span>
            <span style="--i:12"></span>
            <span style="--i:22"></span>
            <span style="--i:26"></span>
            <span style="--i:15"></span>
            <span style="--i:11"></span>
            <span style="--i:17"></span>
            <span style="--i:25"></span>
            <span style="--i:14"></span>
            <span style="--i:23"></span>
            <span style="--i:16"></span>
            <span style="--i:24"></span>
            <span style="--i:19"></span>
            <span style="--i:13"></span>
            <span style="--i:27"></span>
            <span style="--i:18"></span>
            <span style="--i:30"></span>
            <span style="--i:19"></span>
            <span style="--i:29"></span>
            <span style="--i:12"></span>
            <span style="--i:22"></span>
            <span style="--i:26"></span>
            <span style="--i:15"></span>
            <span style="--i:19"></span>
            <span style="--i:13"></span>
            <span style="--i:27"></span>
            <span style="--i:18"></span>
            <span style="--i:30"></span>
            <span style="--i:19"></span>
            <span style="--i:29"></span>
            <span style="--i:12"></span>
            <span style="--i:22"></span>
            <span style="--i:26"></span>
            <span style="--i:15"></span>
        </div>
    </div>
    <div class="login">
        <h1>Login</h1>
        <br>
        <form action="teste-login.php" method="POST">
            <input type="text" name="email" placeholder="email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputsubmit" type="submit" name="submit" value="enviar">
        </form>
        <br>
        <a href="#">Esqueci minha senha</a>
    </div>
</body>
</html>