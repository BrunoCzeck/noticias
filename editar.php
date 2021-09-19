<?php 
include_once ("conexao.php"); # Conexão bd 
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 
$sql = "SELECT * FROM post_noticias WHERE id = '$id'"; 
$sql_result = mysqli_query($conn, $sql);
$row_sql = mysqli_fetch_array($sql_result);

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
        <form method="POST" action="post_edit.php?id=<?php echo $row_sql['id']?>" enctype="multipart/form-data">
            <label style="margin-left: 500px;" for="titulo"> Título </label>
            <input value="<?php echo $row_sql['titulo']?>" type="text" placeholder="Título" name="titulo" id="titulo" style="margin-left: 500px; margin-top: 150px; width: 450px; height: 25px;">
            <br>
            </label>
            <textarea value="" name="corpo" id="corpo" cols="80" rows="15" style="margin-left: 450px; margin-top: 10px;"><?php echo $row_sql['corpo']?></textarea>
            <!-- <img style="margin-left: 500px;" src=". /propangadas/<?php  // echo $row_sql['new_name']?>" alt=""></img> -->
            <input  type="file" name="new_name" id="new_name" style="margin-left: 500px; margin-top: 10px;">
			<input  type="submit" name="submit" style="width: 130px; height: 25px;">
        </form>
    </body>
</html>


