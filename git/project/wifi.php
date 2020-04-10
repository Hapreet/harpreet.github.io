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
}

div {
  border-radius: 5px;
  background-color: skyblue;
  padding: 20px;
  width: 20%;
  margin-left: 500px;
}
	</style>
</head>
<body >
<h1> 	SELECT YOUR BROADBAND</h1>

   <div>
  <form action="last.php" target="last.php" method="POST">
  	
    <select>
      <option >CONNECT</option>
      <option >BSNL</option>
      <option >JIO</option>
      <option >AIRTEL</option>
      <option >FASTWAY</option>
      <option >IDEA</option>

    </select>
    <label for="fname">PHONE NO</label>
    <input type="text" id="fname" name="firstname" placeholder="Your account no.." required>
    

    <label for="lname">AMOUNT</label>
    <input type="text" id="" name="amount13" placeholder="Enter the amount  .." required>


    <input type="submit" value="Submit" name="wifi">
  </form>
</div>


</body>
</html>