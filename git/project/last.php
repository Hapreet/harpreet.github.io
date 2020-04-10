<!DOCTYPE html>
<html>
<head>
    <title>last payment </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">
        
       body
          {
            background-image: url(imgs/bg.jpg);

          }

        .box
         { 

           border:1px solid black;
           height: 250px;
           width:450px;
           margin-left: 470px;
           margin-top: 120px;
           box-shadow: 1px 1px 2px 1px;
           background-color: white;


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

     .bttn:hover
        {

          background-color:black;
          border:2px solid white;
          color: green;
        }   

     span
        {

            font-size: 40px;
            margin-left: 10px;
            color: green;
            

        }   


    h5
       {

            margin-top: -50px;
            margin-left: 1200px;
            font-size: 20px;
            color: white;

       }  
      
      .fa-home
      {

        font-size: 30px;
        color: green;
      }   
    </style>
</head>
<body>
<span><i style="color: yellow;" class="fa fa-university">   Smart Pay</span></i>
<h5><a href="mainchk.php"><i class="fa fa-home fa-1x text-white"></a></i>/pay bills</h5>
<div class="box">
    <form action="" method="POST">
    <ul style="background-color: grey;height: 50px;"> 
        <li style="
            list-style: none;
            text-align: center;
            padding: 5px;
            font-size: 30px;
            font-weight: bold;
            color:yellow;">
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
        
            
            <input style="border-radius: 4px;width: 80px;height: 30px; margin-left: 105px;"type="password" name="pin" placeholder="xxxx" maxlength="8" required>
        </li>
    </ul>
   
</div>
<input  style=" margin-left: 470px;
            margin-top: 50px;
            width: 450px;
            height: 50px;
            "type="submit"  name="sub5"class="btn btn-primary bttn" value="">
</form>
</body>
</html>


<?php
  
    //php  connection 
    include("connect.php");
    session_start();
    date_default_timezone_set("Asia/Kolkata");
    // when electricity bill pay
     
    if(isset($_POST['electric']))
     {
       
        $_SESSION['disc']="Electricity_bill";
       
        $amount=$_POST['amount'];       
        $_SESSION['USERNAME']= $amount;
          echo "<h1 style='margin-left:630px;margin-top:-43px;color:white;font-size:30px;'>Pay:". $GLOBALS['amount']."</h1>"; 
       } 
       

     
   if(isset($_POST['sub5']))
   {
     
       $Amount=$_SESSION['USERNAME'];
       $account1=$_POST['account'];
       $_SESSION['acco']=$account1;
       $pin1=$_POST['pin'];
       $query1="SELECT * FROM form1 WHERE Account_no='$account1'  && password='$pin1'";
       $run1=mysqli_query($conn,$query1);
        $row=mysqli_num_rows($run1);
      
      if($row==1)
    {
       $result=mysqli_fetch_assoc($run1);
       $balance=$result['Total'];

       if($balance>=$Amount)
         {
            
            $total=$balance-$Amount;
            date_default_timezone_set("Asia/Kolkata");
            $time=date("h:i:s a");
            $date=date("Y:m:d");
               $discription=$_SESSION['disc'];
            $query2="UPDATE `form1` SET `Total`=$total WHERE Account_no=' $account1'";
            $run2=mysqli_query($conn,$query2);
            $query3="SELECT * FROM balance ";
            $run3=mysqli_query($conn,$query3);
            $query4="INSERT INTO `balance`(`Account_no`,`Time`,`date`,`Against`,`debit`,`Amount`) VALUES ('$account1','$time','$date','$discription','$Amount','$Amount')";
       if($run4=mysqli_query($conn,$query4))
          {
            
            session_destroy();
            header('location:last1.php');
          }  

         
         }

        else
        {

            echo"<h5 style='color:red;margin-left:500px;margin-top:10px;'><i class='fa fa-frown-o fa-2x'>    INSUFFICIENT FUND</i></h5>";
        } 
   }

      else
       {

          
          echo "<h5 style='color:red;margin-left:400px;margin-top:10px;'><i class='fa fa-frown-o fa-2x'>    INVALID PASSWORD OR ACCOUNT NO</i></h5>";
       }

}
    // when water bill pay
    
    if(isset($_POST['water']))
     {
       
         $_SESSION['disc']="watersuplly_bill";
        // $date=date("d-m-y");
        $amount=$_POST['amount1'];
         $_SESSION['USERNAME']= $amount;
          echo "<h1 style='margin-left:630px;margin-top:-43px;color:white;font-size:30px;'>PAY:". $GLOBALS['amount']."</h1>"; 
     }

    // when landline bill pay
    
    if(isset($_POST['telephone']))
     {
       
         $_SESSION['disc']="Landline_bill";
        // $date=date("d-m-y");
        $amount=$_POST['amount2'];
         $_SESSION['USERNAME']= $amount;
          echo "<h1 style='margin-left:630px;margin-top:-43px;color:white;font-size:30px;'>PAY:" . $GLOBALS['amount']."</h1>"; 

           
     }



   // code for mobile bill
      if(isset($_POST['mobile']))
     {
       
         $_SESSION['disc']="Mobile bill";
        // $date=date("d-m-y");
        $amount=$_POST['amount12'];
         $_SESSION['USERNAME']= $amount;
          echo "<h1 style='margin-left:630px;margin-top:-43px;color:white;font-size:30px;'>PAY:" . $GLOBALS['amount']."</h1>"; 

           
     }
  
  //code for wifi 
       if(isset($_POST['wifi']))
     {
       
         $_SESSION['disc']="wifi bill";
        $date=date("d-m-y");
        $amount=$_POST['amount13'];
         $_SESSION['USERNAME']= $amount;
          echo "<h1 style='margin-left:630px;margin-top:-43px;color:white;font-size:30px;'>PAY:" . $GLOBALS['amount']."</h1>"; 

           
     }

   //code for gas 
       if(isset($_POST['gas']))
     {
       
         $_SESSION['disc']="Gas bill";
        // $date=date("d-m-y");
        $amount=$_POST['amount14'];
         $_SESSION['USERNAME']= $amount;
          echo "<h1 style='margin-left:630px;margin-top:-43px;color:white;font-size:30px;'>PAY:" . $GLOBALS['amount']."</h1>"; 

           
     }  


   //code for dth  
       if(isset($_POST['dth']))
     {
       
         $_SESSION['disc']="DTH bill";
        // $date=date("d-m-y");
        $amount=$_POST['amount15'];
         $_SESSION['USERNAME']= $amount;
          echo "<h1 style='margin-left:630px;margin-top:-43px;color:white;font-size:30px;'>PAY:" . $GLOBALS['amount']."</h1>"; 

           
     }  

 
   // php code for transfer
     if(isset($_POST['transfer']))
      {

         $user=$_POST['send'];
         $money=$_POST['amount16'];
         $_SESSION['USERNAME']=$money;
         $query21="SELECT * FROM form1 WHERE Account_no='$user'";
         $run21=mysqli_query($conn,$query21);
         $row21=mysqli_num_rows();
         if($row21==1)
          {

          }

         else
          {

            echo "INVALID Account no ";
          } 

      }
     
    



 ?>


