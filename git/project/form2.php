<?php
     session_start();
     if(isset($_SESSION["sname"]))
    { 

     echo"YOU ARE ALREADY LOGIN";
     exit();
   }
  

?>


<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body >
 <form action="" method="POST">
 	<table  border="2" align="center" bordercolor="green">
 		<tr >
 			<td >NAME:<input type="text" name="NAME">
 			</td>
 			<td>PASSWORD:<input type="text">
 			</td>

 		</tr>

      <input type="SUBMIT" value="SUBMIT"/>

 </form>
</body>
<?php

  $_SESSION["sname"]=$_POST["NAME"];
  header('location:session.php');
  ?>
</html>