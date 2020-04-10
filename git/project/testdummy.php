<!DOCTYPE html>
<html>
<head>
	<title>testing</title>
</head>
<body>
<form action=""method="POST">
	Name
	<input type="text" name="name"><br>
    
    Account no
	<input type="text" name="acct"><br>
	please select the particular
	<select  name="bill"required>
       <option value="landline">landline</option>
       <option value="phone recharge">phone recharge</option>
       <option value="gas bill">gas bill</option>
       <option value="water bill">water bill</option>
       <option value="electricty bill">electricty bill</option>
       <option value="broadband bill">broadband bill</option>
       </select><br><br>

       please enter the amount 
     <input type="text" name="amt">
    <input type="submit" name="sub"><br><br>	

</form>
<!-- add money  -->
<form>
	add money 
	<input type="text" name="add">
	

</form>
</body>
</html>

<?php

  include("connect.php");
  $name=$_POST["name"];
  $option=$_POST['bill'];
  $amount=$_POST['amt'];
  $acct=$_POST['acct'];
  $date=date("d,m,y");
  $query="SELECT * FROM id ";
  $run=mysqli_query($conn,$query);
  $result=mysqli_fetch_array($run);
  $balance=$result["total"];
  if(isset($_POST['sub']))
  {
   if($balance>=$amount)
     {
      
       $total=$balance-$amount;
       $query1="INSERT INTO `id`(`id`, `date`, `debit`, `discription`, `total`) VALUES ('$acct','$date','$amount','$option','$total')";
       $run1=mysqli_query($conn,$query1);

       if($run1==true)
        {
        	echo "sucess";
        }
       
       else
       {
       	echo "failed";
       }
    
     }

   else
    {


    	echo "insufficient fund";
    }

   } 

?>