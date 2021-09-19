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
                    <a href="index.php">
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
                    <a href="index.php">
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
    <table class="table" style="margin-left: 255px;">
        <thead>
            <tr>
                <th scope="col" style="padding: 10px 50px;">Título</th>
                <th scope="col" style="padding: 10px 100px;">Noticia</th>
                <th scope="col" style="padding: 10px 50px;">Data</th>
            </tr>
        </thead>
    <?php 
    $sql = "SELECT * FROM post_noticias ORDER BY modified";
    $sql_result = mysqli_query($conn, $sql);
        while($row_sql = mysqli_fetch_array($sql_result)){
    ?>
        <tbody>
            <tr>
                <td style="padding: 10px 50px;"><?php echo $row_sql['titulo']; ?></td>
                <td style="padding: 10px 100px;"><?php echo $row_sql['corpo']; ?></td>
                <td style="padding: 10px 50px;"><?php echo $row_sql['modified']; ?></td>
                <td><?php echo "<button><a style='text-decoration: none; color: black;' target='_blank' href='propagandas/" . $row_sql['new_name'] . "'> Visualizar </a></button>";?></td>
		        <td><?php echo "<button><a style='text-decoration: none; color: black;' href='deletar.php?id=" . $row_sql['id'] . "'> Deletar </a></button>";?></td>
		        <td><?php echo "<button><a style='text-decoration: none; color: black;' href='editar.php?id=" . $row_sql['id'] . "'> Editar </a></button>";?></td>
            </tr>
        </tbody>
        <?php
        }
        ?> 
    </table>
    </body>
</html>


