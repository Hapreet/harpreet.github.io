<?php
  include('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>newe user</title>
</head>
<body>
<form action="#" method="post">
		
        <table border="1">
        	
        	<tr>
        		<td>username:<input type="text" name="NAME"></td>
        	</tr>
        	 <tr>   
        		<td>password:<input type="password" name="PASSWORD"></td>
             </tr>
             <tr>
                 
                <td><a href="success.php"> SUBMIT</a></td>
             </tr>	
        </table>

	</form>
	
  <?php 
            $name=$_POST['NAME'];   
            $password=$_POST['PASSWORD'];
            $querry ="INSERT INTO `user`(`username`, `password`) VALUES ('$name','$password')";
            $run=mysqli_query($conn,$querry);
            if ($run) 
              {
                 echo "inserted";

              }
              
             else
              {

                echo "failed";

              }

            
            ?>

</body>
</html>            