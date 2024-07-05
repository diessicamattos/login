<?php
$dbhost = 'localhost';
$dbusename = 'root';
$dbpassword = '';
$dbname = 'cadastros';

$conexao = new mysqli($dbhost,$dbusename,$dbpassword,$dbname);

//if($conexao->connect_errno){
    //echo "Erro";
//}else{
 //echo "Conexão efetuada com sucesso";
//}

?>