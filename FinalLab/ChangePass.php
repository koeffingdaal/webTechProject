<?php
	require_once 'model/DB_config.php';
	$uname = "";
	$opass = "";
	$npass = "";
  	
  	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		
  		$uname = $_POST["uname"];
		$opass = $_POST["opass"];
	//$npass = $_POST["$npass"];


		$query = "UPDATE user set password = '$npass' where username ='$uname' and password = '$opass' ";

		$result = get($query);





  	}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form method="post">
		Enter Your Username : <input type="text" name="uname" placeholder="Username">
		Enter Your Old Password : <input type="Password" name="opass" placeholder="Old Password">
		Enter Your New Password : <input type="Password" name="npass" placeholder="New Password">

		<input type="submit" name="enter" value="Next Step">
	</form>
	</div>
	
</body>
</html>