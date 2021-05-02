<?php 

	require_once 'controller/add_bus_controller.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form align="center" method="post">
		<h1 class="h1">Add Bus</h1>
		<b> <span class="intro">Bus Name</span> : <input type="text" name="bname" placeholder="Add Bus Name" class="my-font"><br><br>
		<b> <span class="intro">Departure</span> : <input type="text" name="dpt" placeholder="Enter city" class="my-font"><br><br>
		<b> <span class="intro">Arrival</span> : <input type="text" name="arv" placeholder="Enter city" class="my-font"><br><br>
		<b> <span class="intro">Time</span> : <input type="Time" name="time" placeholder="Time" class="my-font"><br><br>
		<b> <span class="intro">Type</span> : <input type="text" name="type" placeholder="Ac/Non Ac" class="my-font"><br><br>


			   <input type="submit" name="" value="Enter">
	</form>
</body>
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
			font-family: fantasy;
		}
		.h1{
			font-family: arial;
		}
		.intro{
			font-family: arial;
		}

</style>
</html>