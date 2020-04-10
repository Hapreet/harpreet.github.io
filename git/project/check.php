<?php

 session_start();
 include("connect.php");
  $name=$_SESSION['USERNAME'];
   $query="SELECT * FROM form1 WHERE Name='sahil'";
   $run=mysqli_query($conn,$query);
   $data=mysqli_num_rows($run);
   if($data!=0)
    {
        ?>
        <table  style="text-align: center;">
        	
        	<tr>
                <th>ACCOUNT NO</th>	
                <th>NAME</th>
        		<th>EMAIL</th>
        		<th>CELLPHONE</th>
        		<th>STREET</th>
        		<th>CITY</th>
        		<th>STATE</th>
        		<th>ADHAR NUMBER</th>
        		<th>PASSWORD</th>
        		
        	</tr>
        

        <?php
        
        while ($result=mysqli_fetch_assoc($run)) 
         {
        	
          echo"<img src='".$result['uploadpic']."' height=200px width=200px >";
        	echo "<tr>
            <th>".$result['Account no']."</th>
             <td>".$result['Name']."</td>
        		<td>".$result['E-mail']."</td>
        		<td>".$result['cellphone']."</td>
        		<td>".$result['street']."</td>
        		<td>".$result['city']."</td>
        		<td>".$result['state']."</td>
        		<td>".$result['Adhar']."</td>
        		<td>".$result['password']."</td>
        	</tr>";
        	
         }
    	 echo "</table>";

    }

   else
   {
    	echo'<h1">Object not found!</h1><br>';
        echo'<h5 style="font-size:30px;"The requested profile was not found on this server.<br>  please check your spelling and try again.<br>
       If you think this is a server error, please contact the Mr Happy singh.</h4>';

       echo'<h2 style="font-size:50px;color:green">Error 404</h2>';
    	?><div style="font-size: 50px;"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><a href="profile.php" style="color: white;text-decoration: none;">BACK TO PAGE </marquee></a></div>
    	<?php
    } 

 

	// echo $result['Name']."    ".$result['password']."<br>";


?>
</table>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      body{ 
            margin:0px;
            padding: 0px;

          }
      img
         {

          border-radius: 60px;
          margin-left: 900px;
          margin-top: 200px;
         }

      h1
      {

        position:absolute; 
        margin-top:-458px;
        color: white;
        background-color:black;
        width: 1366px;
        height:60px;
        padding: 10px;

      }
    </style>

</head>
<body>

<a href="main.php">
  <h1>
    
    <i style="color:white;" class="fa fa-university fa-2x">  SMART PAY</i> 
  </h1>
      
</a>    
</body>
</html>


?>