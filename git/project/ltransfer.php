<?php

  include("connect.php");
  session_start();
  
  

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">
        
        .box
         { 

           border:1px solid black;
           height: 250px;
           width:450px;
           margin-left: 470px;
           margin-top: 120px;
           box-shadow: 1px 1px 2px 1px;


         }

        ::placeholder
         {
            font-size: 15px;
            padding:-10px;
         } 

        input
         {
            padding: 15px;
         }


    .bttn
        {
            font-size: 25px;

        }

     span
        {

            font-size: 40px;
            margin-left: 10px;
            color: green;
            border-bottom: 5px solid green;

        }   


    h5
       {

            margin-top: -50px;
            margin-left: 1200px;
            font-size: 20px;

       }  
      
      .fa-home
      {

        font-size: 30px;
        color: green;
      }   
    </style>
</head>
<body>
<span><i class="fa fa-university text-green"></i>   SMART PAY</span>
<h5><a href="mainchk.php"><i class="fa fa-home fa-1x"></a></i>/pay bills</h5>
<div class="box">
    <form action="" method="POST">
    <ul style="background-color: grey;height: 50px;"> 
        <li style="
            list-style: none;
            text-align: center;
            padding: 5px;
            font-size: 30px;
            font-weight: bold;
            color: white;">
            <i class="fa fa-credit-card-alt text-white ">   </i>   PAYMENT DETAILS
        </li>
        <li style="list-style: none;">
            <label style="font-size: 25px;">*Account no:</label><br>
            <input style="border-radius: 4px;width: 260px;height: 30px;" type="text" name="account" placeholder="12345..." maxlength="4"  class="mytext" required>
        </li>

        <li style="list-style: none; padding-top: 10px;">
            <label style="font-size: 20px;">Expiry date:</label> 
            
                <label style="margin-left: 180px; font-size: 25px;">*PIN:</label><br>
            
            <input style="border-radius: 4px;width: 60px;height: 30px;" type="text" name="" placeholder="MM" maxlength="2" >
            <input style="border-radius: 4px;width: 60px;height: 30px; margin-left:50px;" type="text" name="" placeholder="YY" maxlength="2">
        
            
            <input style="border-radius: 4px;width: 80px;height: 30px; margin-left: 105px;"type="password" name="pin" placeholder="PIN" maxlength="8" required>
        </li>
    </ul>
   
</div>
<input  style=" margin-left: 470px;
            margin-top: 50px;width: 450px;height: 50px;
            "type="submit" name="sub5"class="btn btn-primary bttn" value="<?php echo "Pay : ".$_SESSION['rupee'];  ?>">
</form>

</body>
</html>

<!-- code for php -->
<?php

 
     
       
       
        if(isset($_POST['sub5']))
          {


             
            date_default_timezone_set("Asia/Kolkata");
            $time=date("h:i:s a");
            $date=date("Y:m:d");
             $Acc=$_POST['account'];
             $Passs=$_POST['pin'];

           // variable of reciver
            $pay=$_SESSION['rupee'];
            $Acc1=$_SESSION['ACC'];

            // code for sender account no
            $query31="SELECT * FROM form1 WHERE Account_no='$Acc'";
            $run31=mysqli_query($conn,$query31);
            $result31=mysqli_fetch_assoc($run31);
            $nameee=$result31['Name'];
            $balance=$result31['Total'];
           
            // code for reciever 
            $query33="SELECT * FROM form1 WHERE Account_no='$Acc1'";
            $run33=mysqli_query($conn,$query33);
            $result33=mysqli_fetch_assoc($run33);
            $balance1=$result33['Total'];
            $namee=$result33['Name'];
            $_SESSION['disc1']="Send to ".$namee." [ ".$Acc1." ] ";
            $_SESSION['disc2']="Send by ".$nameee." [ ".$Acc." ] ";
            if($balance>$pay)
              {

                    // total update for sender
                    $total=$balance-$pay;
                    $query32="UPDATE `form1` SET `Total`='$total' WHERE Account_no='$Acc'";
                    $run32=mysqli_query($conn,$query32);
                    
                    // total update for reciever 
                    $total1=$balance1+$pay;
                    $query34="UPDATE `form1` SET `Total`='$total1' WHERE Account_no='$Acc1'";
                    $run34=mysqli_query($conn,$query34);
                      
                    // code for  sender transaction
                      $discription1=$_SESSION['disc1'];
                      $query36="INSERT INTO `balance`(`Account_no`,`Time`,`date`,`Against`,`debit`, `Amount`) VALUES ('$Acc','$time','$date','$discription1','$pay','$pay')";
                      $run36=mysqli_query($conn,$query36);
                    
                      
                     // code for reciever transaction
                      $discription2=$_SESSION['disc2'];
                      $query37="INSERT INTO `balance`(`Account_no`,`Time`,`date`,`Against`,`credit`, `Amount`) VALUES ('$Acc1','$time','$date','$discription2','$pay','$pay')";
                      $run37=mysqli_query($conn,$query37);

                    if($run32==1 && $run34==1 && $run36==1 && $run37==1)
                      {
                            

                            session_destroy();
                            header('location:last4.php');  

                      }

                    else
                      {
                      	echo "unsuccesful";
                      }


              }

            else
              {

              	echo "<script> alert('Insufficient funds');</script>";
              }  

          }          

           
    
  

?>



