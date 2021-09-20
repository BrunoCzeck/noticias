<?php

include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$titulo = $_POST['titulo'];
$corpo = $_POST['corpo'];

if(!empty($id)){
	
}
 
$nome_arquivo = $_FILES['new_name']['name'];
$caminho = $_FILES['new_name']['tmp_name'];
$destino = "propagandas/" . $nome_arquivo;
move_uploaded_file($caminho, $destino); // Substitui a pasta do destino. 

/* var_dump($titulo);
var_dump($corpo);
var_dump($id);
exit;
 */
$result_delete= "UPDATE post_noticias SET titulo='$titulo', corpo='$corpo', new_name='$nome_arquivo', modified=NOW() WHERE id = '$id'";
$resultado_delete = mysqli_query($conn, $result_delete);

/* var_dump($new_name);
exit; */

include_once("xml.php");
include_once("json.php");
include_once("jsonSFoto.php");


?>