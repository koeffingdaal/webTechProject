<?php
	// session_start();
	require_once 'controller/login_controller.php';

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center">
		<form method="post" align="center" class="login">
		<h1>LOG IN</h1>
	
		USENAME : <input type="text" name="uname" placeholder="UserName" class="my-font"><br><br>
		PASSWORD : <input type="password" name="pass" placeholder="Password" class="my-font"><br><br>
		<input type="submit" value="Login"> <br> <a href="Registration.php"><b>Not registration yet!</b></a>
	
		
	</form>
	</div>
	
	<style>
		body{
			border: 1px solid black;
			  margin-top: 50px;
			  margin-bottom: 50px;
			  margin-right: 50px;
			  margin-left: 50px;
			  background-color: lightblue;
			  font-family: cosolas;
			  
		}
		.my-font{
			font-family: consolas;
		}

	</style>
</body>
</html>