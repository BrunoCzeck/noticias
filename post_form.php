<?php 

include_once("conexao.php");
session_start();
?>
<head>


</head>
<html>
    <body>

<?php 
if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo']['name'];
    $formatos = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION)); #Formato JPG, PDF, etc...
    $titulo = $_POST['titulo'];
    $corpo = $_POST['corpo'];
    $new_name = md5(time()) . "." . $formatos; 
    $diretorio = "propagandas/"; 
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $arquivo); 
  
    $sql = "INSERT INTO post_noticias (titulo ,corpo, new_name, modified) VALUES ('$titulo' ,'$corpo', '$arquivo', NOW())";
    $sql_result = mysqli_query($conn, $sql);
    include_once("xml.php");
    include_once("json.php");
    include_once("jsonSFoto.php");
    if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Propaganda Inserida!</p>";
	header("Location: index.php");
    }else{
	$_SESSION['msg'] = "<p style='color:red;'> Erro!</p>";
	header("Location: index.php");
    }
}


 
?>

</html>
    </body>