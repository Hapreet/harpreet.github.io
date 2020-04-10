<?php
  include('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<style type="text/css">
		
				
		td{

			color:white;
			font-size: 30px;
			text-align: center;
		}
		
       .new{

            margin-top: 20px;
       	    border: 1px solid white;
       	    width:10%;
       	    text-align: center;
       	    font-size: 20px; 
       }
		a{

			text-decoration-style: none;
		}
	</style>
</head>
<body bgcolor="black">
	<form action="#" method="GET">
		
        <table border="1">
        	
        	<tr>
        		<td>username:<input type="text" name="uname"></td>
        	</tr>
        	 <tr>   
        		<td>password:<input type="password" name="pname"></td>
             </tr>
             <tr>
                 
                <td><input type="submit" name="sname" value="submit"></td>
             </tr>	
        </table>

	</form>
	<div class="new">

		<a href="newuser.php">REGISTER NOW</a>

	</div>
           <?php 
            $name=$_GET['uname'];   
            $password=$_GET['pname'];
            if(isset($_GET['sname']))
                {
                  
                   echo "string";

                }
            
            ?>  
</body>
</html>