<?php
	$Uname = "";
	$Pass = "";
	$Age = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$Uname = $_POST["uname"];
		$Pass = $_POST["pass"];
		$Age = $_POST["age"];
		$server="localhost";
		$user="root";
		$password="";
		$db="webtech";
		$conn = mysqli_connect($server,$user,$password,$db);
		if (!$conn) {
				die("Connection failed: ".mysqli_connect_error());
			}
		$query = "insert into user values ('$Uname','$Pass','$Age')";
		if(mysqli_query($conn,$query)){
			echo "insert";
		}else{
			echo mysqli_connect_error();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="uname" placeholder="Username">
		<input type="password" name="pass" placeholder="password">
		<input type="numeric" name="age" placeholder="Age">
		<input type="submit" value="LogIn">
	</form>

</body>
</html>