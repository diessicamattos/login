<?php

include_once('config.php');

if(isset($_POST['submit'])){

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$senha = $_POST ['senha'];
$sexo = $_POST ['genero'];
$data_nasc = $_POST ['data_nasc'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];
$endereco = $_POST ['endereco'];

$result = mysqli_query($conexao,"insert into usuario(nome,email,telefone,senha,sexo,data_nasc,cidade,estado,endereco) values ('$nome','$email','$telefone','$senha','$sexo','$data_nasc','$cidade','$estado','$endereco')");

}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   

    <title>Cadastro</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
            margin: 50px;
        }

        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color:#0c192c;
            padding: 25px;
            border-radius: 15px;
            width: 30%;

        }

        fieldset{
            border: 3px solid dodgerblue;
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputbox{
            position: relative;
        }

        .inputuser{
            background: none;
            border: none;
            border-bottom:1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputuser:focus ~ .labelinput, .inputuser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nasc{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit{
            background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover{
            background-image: linear-gradient(to right, rgb(0,80,172),rgb(80,19,195));
            color: dodgerblue;
        }
        a{
            color: white;
            border: 1px solid dodgerblue;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0px 1px rgba(0, 0, 0, 0.4);
            text-decoration: none;
        }
        a:hover{
            color: white;
            font-size: bold;
            box-shadow: 1px 1px 1px deepskyblue;
        }

    </style>
</head>
<body>
<a href="home.php">Voltar</a>
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

    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Cadastro</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputuser" required>
                    <label for="Nome" class="labelinput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputuser" required>
                    <label for="email" class="labelinput">email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="telefone" id="telefone" class="inputuser" required>
                    <label for="telefone" class="labelinput">telefone</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputuser" required>
                    <label for="senha" class="labelinput">senha</label>
                </div>
                <br><br>
                <p>Sexo</p>
                <input type="radio" id="Feminino" name="genero" value="Feminino" required>
                <label for="Feminino">Feminino</label>
<br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
<br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Prefiro não marcar</label>
                <br><br>
                <div class="inputbox">
                    <label for="data_nasc"><b>Data de nascimento</b></label>
                    <input type="date" name="data_nasc" id="data_nasc" required>
                </div>
                <br><br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputuser" required>
                    <label for="cidade" class="labelinput">cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputuser" required>
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputuser" required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div>
                <br><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Aceito os termos
                 </label>
                </div>
                <br><br>
                  <input type="submit" name="submit" id="submit">
                  <br><br>
            </fieldset>
        </form>
    </div>
    
</body>
</html>