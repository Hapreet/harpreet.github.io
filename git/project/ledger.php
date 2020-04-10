<?php
 session_start();
 include("connect.php");
  $acct=$_SESSION['no'];
  
   $query1="SELECT * FROM form1 WHERE Account_no='$acct'";
   $run1=mysqli_query($conn,$query1);
   $result1=mysqli_fetch_assoc($run1);
   $_SESSION['account']=$result1['Account_no'];
   $account=$_SESSION['account'];
   $_SESSION['Total']=$result1['Total'];
   $query="SELECT * FROM balance WHERE Account_no='$account'";
   $run=mysqli_query($conn,$query);
   $data=mysqli_num_rows($run);
   if($data!=0)
    {
        ?>

        <h1 style="text-align: center;background-color: black;color: white;height: 50px;"> The Smart pay cooperative pvt. ltd 
        <a  style="margin-left: 650px;color: white;"href="mainchk.php"><i class="fa fa-home fa-1x"></i></a>
        <a onclick="myFunction()"style="margin-left: 25px;"><i class="fa fa-print fa-1x"></i></a>
        </h1>
        <h2 style="margin-left:300px; font-size: 35px;">--------------The Mini Statment of Transactions:--------------</h2>
        <!-- code for account number and name  -->
        <?php
       
           echo "<span style='font-size:30px;margin-left:550px;margin-top:-10px;position:absolute;'>"."Username: ".$_SESSION['USERNAME']."<br>";
          echo "Account no: ".$_SESSION['account'].'<br>';
           echo "Total Balance: ".$_SESSION['Total'] .' &#x20b9';
          
        ?>
        <table border="1px" style=" border-collapse: collapse;position:relative;text-align: center; margin-top: 90px;margin-left: -250px;font-size:25px;border:none;background-color: white; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
        	
        	<tr>
        	<th>Time</th> 	
            <th>Date</th>    		
            <th style="padding:20px;">Discription</th>
        	<th style="padding: 20px;">Credit</th>
        	<th style="padding: 20px;">Payment</th>  		
        	</tr>
        

        <?php
        
        while ($result=mysqli_fetch_assoc($run)) 
         {
        	
         
        	echo "<tr>
                 <td style='padding:10px;'>".$result['Time']."</td>
                <td style='padding:10px;'>".$result['date']."</td>
        		<td style='padding:10px;'>".$result['Against']."</td>
        		<td style='padding:10px;color:green;'>".$result['credit']."</td>
        		<td style='padding:10px; color:red;'>".$result['debit']."</td>
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
		body
		   {

		   	padding: 0px;
		   	margin: 0px;
		   }

       table
        {
          box-shadow: 0px 1px 10px 1px;
        }

  
      tr:nth-child(even)
       {
        background-color: #f2f2f2;
     
       }

      tr:hover
       {
        background-color: #ddd;
       } 
    th
     {
      
      
      background-color: #4CAF50;
      color: white;
     }

	</style>
	<script>

           function myFunction() {
           window.print();
         }

       </script> 
</head>
<body>
<h5 style="margin-top: 80px;margin-left: -180px;">--------------------This is computer generated bill.--------------------</h5>
</body>
</html>