<!DOCTYPE html>
<html>
<head>
	<title>testing</title>
</head>
<body>
  <form method="POST">
   <label>Username</label>
   <input type="text" name="name" required><br><br>
   <label>Enter the amount</label>
  <input type="text" name="amount" required><br><br>
  <input type="submit" name="sub"><br>
 </form>
 ------------transfer fund---------<br><br><br><br>
 <form method="POST">
<label> FROM</label>
<input type="text" name="from"><br>

<label> Add benificiary</label>
<input type="text" name="add"><br>
 
 <label> Amount</label>
 <input type="text" name="amt"><br>

 <input type="submit" name="sub1">

</form>
</body>
</html>
<?php

    
    
    // error_reporting(0);
    $servername="localhost";
     $username="root";
     $password="";
     $db="pay1";
   
   $conn=mysqli_connect($servername,$username,$password,$db);
      if($conn)
       { 

             // echo "<h1>yess okay</h1>";
       }

       else
       {
         echo "connection failed";

       }

       if(isset($_POST['sub']))
       	 {
            
            $name=$_POST['name'];
       	 	$amount=$_POST['amount'];
       	 	$query="SELECT * FROM dummy WHERE Name='$name'";
            $run=mysqli_query($conn,$query);
            $result=mysqli_fetch_assoc($run);
           if($row=mysqli_num_rows($run))
              
              {    
                  $bal=$result['balance'];
                  if($bal>=$amount)
                  {
                      $total=$bal-$amount;
                      $query="UPDATE `dummy` SET `balance`=$total WHERE Name='$name'";
                      $run1=mysqli_query($conn,$query);
                      $query="SELECT * FROM dummy WHERE Name='$name'";
                      $run=mysqli_query($conn,$query);
                     $result=mysqli_fetch_assoc($run);
                      echo $result['balance'];
       	 	      }
       	 	      else
       	 	      {

       	 	 	     echo"insuffiecient balance";
       	 	      }
       	 
              }

              else
               {

               	echo "invalid user";
               }
       	 }

      if(isset($_POST['sub1']))
       {
 


            $from=$_POST['from'];
       	 	$to=$_POST['add'];
       	 	$amt=$_POST['amt'];

  
            $query1="SELECT * FROM dummy WHERE Name='$from'";
            $run1=mysqli_query($conn,$query1);
            $result1=mysqli_fetch_assoc($run1);
            $d1=$result1["balance"];
            if($d1>=$amt)
               {    
                   $total1=$d1-$amt;
                   $query2="UPDATE `dummy` SET `balance`=$total1 WHERE Name='$from'";
                   $run2=mysqli_query($conn,$query2);
      
                   $query3="SELECT * FROM dummy WHERE Name='$to'";
                   $run3=mysqli_query($conn,$query3);
                   $result2=mysqli_fetch_assoc($run3);
                   $d2=$result2["balance"];
                   $total2=$d2+$amt;
                   $query3="UPDATE `dummy` SET `balance`=$total2 WHERE Name='$to'";
                   $run2=mysqli_query($conn,$query3);

                }
             else
                {

                	echo "insufficeint balance";
                }    


       }  

        echo"<br>";
       $date=date("d-m-y");
       echo "date".$date; 
        echo"<br>";


    
    $query7="SELECT * FROM balance ";
    $run7=mysqli_query($conn,$query7);
    ?>
    <table>
    	<tr>
    		<td>debit</td>
    		<td>credit</td>
    		<td>total</td>
    	</tr>
    </table>
    <?php
    while($row7=mysqli_fetch_array($run7))
     {
            

           	echo $row7["credit"]." ".$row7["debit"]." ".$row7["Total"]."<br>";
     }



 ?>