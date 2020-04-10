 <!DOCTYPE html>
 <html>
 <head>
 	<title>image upload </title>
 </head>
 <body>
  <form action="" method="post" enctype="multipart/form-data">
  	

   <input type="file" name="upload">
   <input type="submit">
  </form>
 </body>
 </html>


 <?php
     
            include("connect.php");
            error_reporting(0);
            $file=$_FILES["upload"]["name"];
            $tempname=$_FILES["upload"]["tmp_name"];
            $folder="upload img/".$file;
            move_uploaded_file($tempname,$folder);
            echo "<img style='border-radius:60px;' src='$folder' height='100px'width='100px'>";
      
      ?>
