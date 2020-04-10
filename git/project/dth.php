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
   transition: 1s;
  transition: width 2s;
}

input[type=submit]:hover {
  background-image: linear-gradient(to right,orange,red,yellow);
   width: 60%;
  color: black;
}

div {
  border-radius: 5px;
  background-color: #00FA9A;
  padding: 20px;
  width: 20%;
  margin-left: 500px;
}
	</style>
</head>
<body >
<h1> 	SELECT  YOUR OPERATOR</h1>

   <div>
  <form action="last.php" target="last.php" method="POST">
  	 <label for="OPERATOR">DTH OPERATOR</label>
    <select>
      <option >VIDEOCON</option>
      <option >DISH TV</option>
      <option >TATA SKY</option>
      <option >AIRTEL</option>
      <option >FASTWAY</option>
      <option >HUAWEI</option>

    </select>

    
    

    <label for="lname">AMOUNT</label>
    <input type="text" id="" name="amount15" placeholder="Enter the amount  .." required>


    <input type="submit" value="Submit" name="dth">
  </form>
</div>


</body>
</html>