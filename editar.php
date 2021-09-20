<?php 
include_once ("conexao.php"); # Conexão bd 
include_once("navbar.html");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 
$sql = "SELECT * FROM post_noticias WHERE id = '$id'"; 
$sql_result = mysqli_query($conn, $sql);
$row_sql = mysqli_fetch_array($sql_result);

?>
<form method="POST" action="post_edit.php?id=<?php echo $row_sql['id']?>" enctype="multipart/form-data">
    <!-- Img Header -->
    <img src="logo/topo.jpg" style=" margin-left: 240px; width:80%; height: 100px;" alt="">
    <img src="logo/bg_display.jpg" style="margin-left: 240px; width: 1200px; height: 10px; margin-top: 110px;" alt="">
    <!-- Titulo -->
    <input value="<?php echo $row_sql['titulo']?>" type="text" placeholder="Título" name="titulo" id="titulo" 
    style="margin-left: 600px;
    margin-top: 150px;
    width: 290px;
    height: 30px;
    text-align: center;">
    <!-- Textarea -->
<textarea value="" name="corpo" id="corpo" cols="45" rows="15"
    style="margin-left: 600px; 
    margin-top: 10px; 
    font-size: 12px; 
    border-radius:5px; 
    border-color: #2F4F4F; 
    border-width: 2px;"><?php echo $row_sql['corpo']?></textarea>
<!-- img -->
<img style="margin-left: 650px; width: 190px; height: 100px; border-radius: 5px;" src="propagandas/<?php echo $row_sql['new_name'];?>" alt=""></img>
<!-- file e botão submit -->
    <input  type="file" name="new_name" id="new_name" style="margin-left: 550px; width: 350px; margin-top: 125px;">
    <input  type="submit" name="submit" style="margin-left: -60px;width: 100px; height: 23px;">
</form>
