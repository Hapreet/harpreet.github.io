<?php
 session_start();
 include("connect.php");

  

  // error_reporting(0);
  $acc=$_SESSION['no'];
   $query="SELECT * FROM form1 WHERE Account_no='$acc'";
   $run=mysqli_query($conn,$query);
   $data=mysqli_num_rows($run);
   if($data!=0)
    {
        ?>
        <table border="2px" style="text-align: center;">
        	
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
            <td>".$result['Account_no']."</td>
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

         $_SESSION['ACCT']=$result['Account_no'];
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

   
   $query1="SELECT * FROM form1 WHERE Account_no='$acc'";
   $run1=mysqli_query($conn,$query1);
   $result1=mysqli_fetch_assoc($run1);
              $nma=$result1['Name'];
             $_SESSION['ema']=$result1['E-mail'];
             $_SESSION['cell']=$result1['cellphone'];
             $_SESSION['str']=$result1['street'];
             $_SESSION['cit']=$result1['city'];
             $_SESSION['sts']=$result1['state'];
             $_SESSION['Aad']=$result1['Adhar'];

	// echo $result['Name']."    ".$result['password']."<br>";


?>
</table>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">
      body{ 
            margin:0px;
            padding: 0px;
            background-color: #aaaaaa;

          }
      img
         {

         
          margin-left: 80px;
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
        font-size: 25px;

      }
    
   table
       {

        border-collapse: collapse;
        width: 10%;
        height: 32%;
        font-family: monospace;
        font-size: 15px;
        text-align: left;
        margin-left: 300px;
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


      button
      {
        background:none;
        border:1px solid white;
        margin-top: 180px;
        margin-left: 600px;
        height: 40px;
        width: 220px;
        font-size: 25px;
        transition: 1s;
        border-radius: 5px;
        background-color: white;
      }
     
      button:hover
      {
        background:none;
      }
    </style>
       

</head>
<body>


  <h1>
    
    <i style="color:white;" class="fa fa-university fa-2x"></i>  SMART PAY
    <span style="margin-left:1000px;"><a style="color:white;" href="mainchk.php"><i class="fa fa-home"></i></a>/profile</span>
  </h1>
       <button type="button"data-target="#mymodal" data-toggle="modal"><i class="fa fa-pencil-square-o"></i> Profile update</button>
       
       
        <div class="modal bg-black fade" id="mymodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"> 
                <h3 style="font-size: 25px;" class="text-center text-primary">
                  Enter the new profile .
                </h3> 
                <button style="height:50px; width: 30px;" type="button"class="close" data-dismiss="modal">&times;
                  
                </button>               
              </div>
              <div class="modal-body">
                 <form action="" method="POST">
                    <div class="form-group">
                      <label><i class="fa fa-user fa-2x text-success"></i>     NAME</label>
                      <input  type="text" name="user1" class="form-control"required value='<?php 
                      print $nma;?>'>
                    </div>
                     <div class="form-group">
                      <label><i class="fa fa-envelope fa-2x text-danger"></i>      E-mail</label>
                      <input  type="email" name="pass1" class="form-control" required value="<?php print  $result1['E-mail'];?>">
                    </div>
                   
                    <div class="form-group">
                      <label><i class="fa fa-mobile fa-2x text-primary"></i>      Cellphone</label>
                      <input  type="number" name="pass2" class="form-control" required
                      value='<?php

                      print $_SESSION['cell'];
                      ?>'>
                    </div>
                     <div class="form-group">
                      <label><i class="fa fa-road fa-2x text-warning"></i>      Street</label>
                      <input  type="text" name="pass3" class="form-control" required
                       
                       value='<?php

                      print $_SESSION['str'];
                      ?>'
                      >
                    </div>
                     <div class="form-group">
                      <label><i class="fa fa-globe fa-2x text-info"></i>      City</label>
                      <input  type="text" name="pass4" class="form-control" required
                      
                      value='<?php

                      print $_SESSION['cit'];
                      ?>'
                      >
                    </div>
                  <div class="form-group">
                      <label><i class="fa fa-location-arrow fa-2x text-secondary"></i>      State</label>
                      <input  type="text" name="pass5" class="form-control" required
                     value='<?php

                      print $_SESSION['sts'];
                      ?>'
                      
                      >
                    </div>
                     <div class="form-group">
                      <label><i class="fa fa-id-card-o fa-2x"></i>      Adhar-number</label>
                      <input  type="number" name="pass6" class="form-control" required
                       value='<?php

                      print $_SESSION['Aad'];
                      ?>'

                      >
                    </div>
                
              </div>
              <div class="modal-footer justify-content-center" >
                <input class="btn btn-primary text-white" type="submit" name="submit20" value="save changes">
              </div>
            </div>
          </div>
        </div> 
                  
                </form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

<?php

  
if(isset($_POST['submit20']))
  {
  $name1=$_POST['user1'];
    $name2= $_POST['pass1'];
     $name3= $_POST['pass2'];
      $name4= $_POST['pass3'];
      $name5=  $_POST['pass4'];
       $name6=  $_POST['pass5'];
        $name7=  $_POST['pass6'];
          
   $acc2=$_SESSION['no'];
   $query2="UPDATE `form1` SET `Name`='$name1',`E-mail`='$name2',`cellphone`= '$name3',`street`= '$name4',`city`= '$name5',`state`= '$name6',`Adhar`= '$name7' WHERE Account_no='$acc2'";
    $run2=mysqli_query($conn,$query2);
     if($run2)

      {
       
        echo "<script> alert('Profile updated succesfuly')</script>";

      }

      else
      {
        echo "unable to change profile ";
      }

}

?>