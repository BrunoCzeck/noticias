<?php
#Deletar Noticia
session_start();
include_once ("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 
if(!empty($id)){
	
}
$result_delete= "DELETE FROM post_noticias WHERE id='$id'";
$resultado_delete = mysqli_query($conn, $result_delete);
include_once("xml.php");
// MSG 
if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto Apagado com Sucesso!</p>";
	header("Location: visualizar.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto Não Editado!</p>";
	header("Location: deletar.php?id=$id");
}

?>