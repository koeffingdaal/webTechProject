<?php
	include 'controller/login_controller.php';

?>
<!DOCTYPE html>
<html>
<head>

	<style>
		body{
			background-color: 	#00FF00;
		}
		
		.login-div{
			border: 1px solid black;
			margin: auto;
			width: 25% ;
			margin-top: 16% ;
			background-color: 	#FFFFFF;
			background-image: url(background.jpg);
		}
		.my-font{
			font-family: consolas;
		}
		.btn-mine{
			background-color: rgb(51, 51, 0);
			width: 360% ;
			border: none;
			size: 3px;
			padding: 5px;
		}
		.btn-mine:hover{
			background-color: #0000FF;
		}
		.btn-mine:active{
			background-color: rgb(51, 204, 51);
		}
	</style>
</head>
<body>
	<div class="login-div">
		<h1 align="center" class="my-font">Log in</h1>
		<form method="post" action="dashboard.php">
			<table align="center">
				<tr>
					<td><span class="my-font" style="color: rgb(17, 51, 0);">Username</span></td>
					<td>:<input type="text" placeholder="Username" name="uname"></td>
				</tr>
				<tr>
					<td><span class="my-font">Password</span></td>
					<td>:<input type="Password" placeholder="Password" name="pass"></td>
				</tr>
				<tr>
					<td><span>Age</span></td>
					<td>:<input type="numeric" name="age" placeholder="Age"></td>
				</tr>

				<tr colspan="2">
					<td><input type="submit" value="Login" class="my-font btn-mine"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
