<?php 

include_once("conexao.php");

$sql="SELECT * FROM post_noticias WHERE new_name != '' ORDER BY modified DESC LIMIT 3"; 
$result=mysqli_query($conn,$sql);

/* manipularJson('JsonCFotos', $result); */

/* $sqlSemFoto="SELECT * FROM post_noticias WHERE new_name = '' ORDER BY modified DESC LIMIT 3"; 
$result_SemFoto=mysqli_query($conn,$sqlSemFoto); */

/* manipularJson('JsonSFotos', $result_SemFoto); */
/* var_dump($result);
exit; */
/* function manipularJson($nome_arquivo, $sql){ */

$response = array();
$posts = array();
while($row=mysqli_fetch_array($result)) { 
  $title=$row['titulo']; 
  $corpo=$row['corpo']; 
  $new_name=$row['new_name'];
  $modificacao=$row['modified'];
  $posts[] = array(
  'titulo'=>$title,
  'corpo'=>$corpo,
  'new_name'=>$new_name,
  'modified'=>$modificacao, 
);
}
$response['post_noticias'] = $posts;

$fp = fopen('json/JsonComFoto.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);
 
 /* if(file_exists("json/resultado.json")){ // verifica se o arquivo JSON existe 
    unlink("json/resultado.json"); // apaga o arquivo JSON.
    } */
?> 