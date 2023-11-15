<?php
$servidor = "localhost";
$usuario= "root";
$senha= "";
$dbname = "quiz";

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if($mysqli->connect_errno){
    echo "Falha ao conectar: " . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
} else {
    echo "Conectado ao Banco de Dados.";
}

?>