<!-- ledger for mobile -->

<?php
 include("connect.php");
 session_start();
 $acct=$_SESSION['no'];
  $query1="SELECT * FROM balance WHERE Account_no='$acct'  AND Against='DTH bill'";
   $run=mysqli_query($conn,$query1);
   $data=mysqli_num_rows($run);

   if($data!=0)
    {
         
                    

         ?>

          
          <table border="1px" style=" border-collapse: collapse;position:relative;text-align: center; margin-top: 110px;margin-left: 450px;font-size:25px;border:none;background-color: white; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
        	
        	<tr>
        	<th>Time</th> 	
            <th>Date</th>    	
        	<th style="padding: 20px;">Payments</th>  		
        	</tr>


          <?php
        
        while ($result=mysqli_fetch_assoc($run)) 
         {
        	
         
        	echo "<tr>
                 <td style='padding:10px;'>".$result['Time']."</td>
                <td style='padding:10px;'>".$result['date']."</td>
        		<td style='padding:10px; color:red;'>".$result['debit']." &#x20b9</td>
        	</tr>";
        	
         }


    	// e6cho "Tabel has records";

    }
  
  else
  {
  	echo "Error 404 there is nothing to dsiplay Please check again:";
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ledeger details</title>
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
</head>
<body>

<h1 align="center">-----------------The smart pay pvt. ltd.-----------------</h1>
<span style="margin-left: 37%;font-size: 20px; color: red;">All the transactions related to  Dth Payments.<br>
 </span> 


 <?php
       
           echo "<span style='font-size:20px;margin-left:270px;margin-top:10px;position:absolute;padding-top:40px;'>"."Username: ". $_SESSION['USERNAME']."</span>";
          echo "<span style='font-size:20px;margin-left:650px;margin-top:10px;position:absolute;padding-top:40px;'>"." Account no: ".  $_SESSION['no']."</span>";
           echo "<span style='font-size:20px;margin-left:1000px;margin-top:10px;position:absolute;padding-top:40px;'>"." Total Balance: ".  $_SESSION['Total'] .' &#x20b9';
          
        ?>
        <div style="position:absolute;margin-top:20px;border-bottom: 2px solid black;width: 730%;margin-left:-990px;">
        	
        </div>
        <span style=" position:absolute; margin-top: 500px;margin-left:-550px;font-size: 18px;">Computer generated bill.</span>
</body>
</html>