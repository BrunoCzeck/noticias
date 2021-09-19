<?php 
header("content-type: text/html; charset=utf-8");
$servidor = "localhost:3306"; 
$usuario = "root";
$senha= "";
$dbname = "noticias";

// Cria conexão com o BD

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$conn -> set_charset("utf8"); # seta tudo como utf8. # Mysql colocar toda as tabelas  em utf8_unicode_ci
?>