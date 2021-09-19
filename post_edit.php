<?php

include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$titulo = $_POST['titulo'];
$corpo = $_POST['corpo'];
if(!empty($id)){
	
}

/* var_dump($titulo);
var_dump($corpo);
var_dump($id);
exit;
 */
$result_delete= "UPDATE post_noticias SET titulo='$titulo', corpo='$corpo', modified=NOW() WHERE id = '$id'";
$resultado_delete = mysqli_query($conn, $result_delete);
include_once("xml.php");
include_once("json.php");
include_once("jsonSFoto.php");


?>