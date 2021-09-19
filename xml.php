<?php

include_once("conexao.php");

$consultaFotos = "SELECT * FROM post_noticias WHERE new_name != '' ORDER BY modified DESC LIMIT 3";
$sql_fotos = mysqli_query($conn, $consultaFotos);

manipularXml('xmlCFotos' , $sql_fotos);

$consultaSemFotos = "SELECT * FROM post_noticias WHERE new_name = '' ORDER BY modified DESC LIMIT 3";
$sql_sfotos= mysqli_query($conn, $consultaSemFotos);

manipularXml('xmlSFotos', $sql_sfotos);

function manipularXml($nome_arquivo, $sql){
if(file_exists("xml/$nome_arquivo.xml")){ // verifica se o arquivo xml_fotos existe 
    unlink("xml/$nome_arquivo.xml"); // apaga o arquivo xml. 
}
$manipulador_arq = fopen("xml/$nome_arquivo.xml","w+"); // cria o arquivo xml_fotos.xml 

fwrite($manipulador_arq,"<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>\n\n\n<noticias criado = '" . date('d/m/Y H:i') . "'>");

while($exibir = mysqli_fetch_array($sql)) 
{

$xml = "\n\n<noticia titulo = '$exibir[titulo]' texto='$exibir[corpo]' imagem='$exibir[new_name]' criado='$exibir[modified]'>\n";

$xml .= "\n</noticia>";

fwrite($manipulador_arq,$xml); 

}

fwrite($manipulador_arq,"\n\n</noticias>"); 

}

if(file_exists("xml/xml_fotos.xml")){ // verifica se o arquivo xml_fotos existe 
unlink("xml/xml_fotos.xml"); // apaga o arquivo xml. 
}


?>