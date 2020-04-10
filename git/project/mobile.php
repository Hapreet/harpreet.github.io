<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
   
   input[type=PASSWORD], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

 input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 30%;
  background-color:black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 100px;
}

input[type=submit]:hover {
  background-image: linear-gradient(to right,orange,red,yellow);
  transition: 0.5s;
}

div {
  border-radius: 5px;
  color: white;
  background-color: black;
  padding: 20px;
  width: 20%;
  margin-left: 500px;
} 
	</style>
</head>
<body >
<h1> 	SELECT  YOUR NETWORK</h1>

   <div>
  <form action="last.php" target="last.php" method="POST">
  	 <label for="OPERATOR">NETWORK OPERATOR</label>
    <select>
      <option >JIO</option>
      <option >IDEA</option>
      <option >AIRTEL</option>
      <option >VODAFONE</option>
      <option >VIDEOCON</option>
      <option >BSNL</option>

    </select>

    <label for="fname">MOBILE  NO</label>
    <input type="text" id="fname" name="firstname" placeholder="Your MOBILE no.." required>

    
   

    <label for="lname">AMOUNT</label>
    <input type="number" id="" name="amount12" placeholder="Enter the amount  .." required>


    <input type="submit" value="Submit" name="mobile">
  </form>
</div>


</body>
</html>