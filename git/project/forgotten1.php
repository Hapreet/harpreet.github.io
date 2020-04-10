<?php
 session_start();
 include("connect.php");
  $no=$_POST['no'];
   $query="SELECT * FROM form1 WHERE Account_no='$no'";
   $run=mysqli_query($conn,$query);
   $data=mysqli_num_rows($run);
   if($data!=0)
    {
        ?>
        <table border="2px" style="text-align: center;">
        	
        	<tr>
            
        		<th>PASSWORD</th>
        		
        	</tr>
        

        <?php
        
        while ($result=mysqli_fetch_assoc($run)) 
         {
        	
          echo"<img src='".$result['uploadpic']."' height=200px width=200px >";
        	echo "<tr>
           
        		<td>".$result['password']."</td>
        	</tr>";
        	
         }
    	// e6cho "Tabel has records";

    }

   else
   {
    	echo'<h1">Object not found!</h1><br>';
        echo'<h5 style="font-size:30px;"The requested profile was not found on this server.<br>  Please check your spelling and try again.<br>
       If you think this is a server error, please contact the Mr Happy singh.</h4>';

       echo'<h2 style="font-size:50px;color:red;">Error 404</h2>';
    	?><div style="font-size: 50px;"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><a href="loginpage.php" style="color: white;text-decoration: none;">BACK TO PAGE </marquee></a></div>
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
            background-color: #aaaaaa;

          }
      img
         {

         
          margin-left: 500px;
          margin-top: 200px;
          margin-bottom: 10px;
          border:4px solid;
          border-color:#588c7e;
         }

      h1
      {

        position:absolute; 
        margin-top:-410px;
        color: white;
        background-color:black;
        width: 1366px;
        height:60px;
        padding: 10px;

      }
    
   table
       {

        border-collapse: collapse;
        width: 10%;
        height: 32%;
        font-family: monospace;
        font-size: 15px;
        text-align: left;
        margin-left: 700px;
        margin-top: -217.9px;

       }
     
     th
      {

        background-color: #588c7e;
        color: white;
      }
      
     tr:nth-child(even)
      {

        background-color:#f2f2f2;
      } 
     td{   

        padding: 10px;
        font-weight: bold;
        font-size: 20px;

      }  
    </style>
       

</head>
<body>


  <h1>
    
    <i style="color:white;" class="fa fa-university fa-2x">  SMART PAY</i> 
    <span style="margin-left:750px;"><a style="color:white;" href="loginpage.php"><i class="fa fa-home"></i></a>/password</span>
  </h1>
       
</body>
</html>


