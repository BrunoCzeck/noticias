<?php 
include_once("conexao.php");
include_once("navbar.html");
?>
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


