<?php
    include_once("conexao.php");


?>



<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style.css">
        <title>Noticias</title>
    </head>
    <body>
        <img src="logo/logocampo.png"></img>
        <div class="sidebar"> 
            <ul>    
                <li>
                    <a href="">
                        <i class='bx bx-home'></i>
                        <span class="links_name">Home</span>
                    </a>
                </li>
                <li>
                    <a href="visualizar.php">
                        <i class='bx bx-menu'></i>
                        <span class="links_name">Visualizar Propagandas</span>
                    </a>     
                </li>
                <li>
                    <a href="">
                        <i class='bx bx-download'></i>
                        <span class="links_name">Inserir Propaganda</span>
                    </a>     
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-edit'></i>
                        <span class="links_name">Editar e Deletar Noticias</span>
                    </a>     
                </li>
                <li>
                    <a href="">
                        <i class='bx bx-exit'></i>
                        <span class="links_name">Sair</span>
                        
                    </a>     
                </li>
            </ul>
        </div>
        <form method="POST" action="post_form.php" enctype="multipart/form-data"> 
            <input type="text" placeholder="Título" name="titulo" id="titulo" style="margin-left: 500px; margin-top: 150px; width: 450px; height: 25px;">
            <br>
            <textarea name="corpo" id="corpo" cols="80" rows="15" style="margin-left: 450px; margin-top: 10px;"></textarea>
            <input  type="file" name="arquivo" style="margin-left: 500px; margin-top: 10px;">
			<input  type="submit" name="submit" style="width: 130px; height: 25px;">
        <?php 



        ?>
        </form>    
    </body>
</html>


