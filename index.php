<?php
    include_once("conexao.php");
    include_once("navbar.html");
?>
        <form method="POST" action="post_form.php" enctype="multipart/form-data"> 
            <img src="logo/topo.jpg" style=" margin-left: 240px; width:80%; height: 100px;" alt="">
            <img src="logo/bg_display.jpg" style="margin-left: 240px; width: 1200px; height: 10px; margin-top: 110px;" alt="">
            <input type="text" placeholder="Título" name="titulo" id="titulo"style="margin-left: 600px;
            margin-top: 150px;
            width: 290px;
            height: 30px;
            text-align: center;">
            <br>
            <textarea name="corpo" id="corpo" cols="45" rows="15" placeholder="Notícia"style="margin-left: 600px; 
            margin-top: 10px; 
            font-size: 12px; 
            border-radius:5px;
            border-color: #2F4F4F; 
            border-width: 2px;
            text-align: center;"></textarea>
            <input type="file" name="arquivo" style="margin-left: 550px; margin-top: 10px; width: 350px;">
			<input type="submit" name="submit" style="margin-left: -60px;width: 100px; height: 23px;">
        </form>    
    </body>
</html>


