<?php
	require_once 'controller/update_bus_controller.php';

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" align="center">
		<h1>Update Bus route</h1>
		Which bus's route do you want to update? : <input type="text" name="bname" placeholder="Bus Name"><br><br>
		Departure : <input type="text" name="dpt" placeholder="Enter city"><br><br>
		Arrival : <input type="text" name="arv" placeholder="Enter city"><br><br>
		Type : <input type="text" name="type" placeholder="Type"><br><br>

		<input type="submit" name="" value="Update">
	</form>

</body>
</html>