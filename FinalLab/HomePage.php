<?php
	$ride = "";
	$bus = "";

	 if($_SERVER["REQUEST_METHOD"] == "POST"){
	 	$ride = $_POST["ride"];

	 	if(isset($bus)){
	 		header("Location: DigitalRide.php");
	 	}


	 }

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<div class="banner">
		<div class="navbar">
			<img src="https://img.freepik.com/free-vector/bus-logo-concept-silhouette-bus_86707-68.jpg?size=338&ext=jpg" class="logo">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="login.php">Log In</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="contact.php">contact Us</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
		</div>
		
	</div>

	<div class="content">
		<h1>Introducing you to the Digital System</h1>
		<p>A one-stop shop for your everyday needs at your fingertips</p>
		<div>
			<form method="post">
				<button type="submit"><span></span> Digital Ride</button>
			 	<button type="button"><span></span> Digital Food</button>
			 	<button type="submit" name="bus"><span></span> Digital Bus</button>
			 	<button type="button"><span></span> Digital Launch</button>
			 	<button type="button"><span></span> Digital Event</button>
			 	<button type="button"><span></span> Digital Movie</button>
			</form>
		 	
		</div>
	</div>

</body>
<style>
	body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;

}

.banner{
	width: 100%;
	height: 100vh;
	background-image: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80);
	background-size: cover;
	background-position: center;
} 
.navbar{
	position: left;
	width: 85%;
	margin: auto;
	padding: 35px 0;
	display: flex;
	align-items: center;
	justify-content: space-between;
}
.logo{
	width: 120px;
	cursor: pointer;
}
.navbar ul li{
	list-style: none;
	display: inline-block;
	margin: 0 20px;
	position: relative;
}
.navbar ul li a{
	text-decoration: none;
	color: #fff;
	text-transform: uppercase;
}
.navbar ul li::after{ 
	content: '';
	height: 3px;
	width: 100;
	background: #009688;
	position: absolute;
	left: 0;
	bottom: -10px;
	transition: 0.5s;
}
.navbar ul li:hover::after{
	width: 100%;
}
.content{
	width: 100%;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	text-align: center;
	color: #fff; 
}
.content h1{
	font-size: 70px;
	margin-top: 80px;
}
.content p{
	margin: 20px auto;
	font-weight: 100;
	line-height: 25px;
}
button{
	width: 200px;
	padding: 15px 0;
	text-align: center;
	margin: 20px 10px;
	border-radius: 25px;
	font-weight: bold;
	border: 2px solid #009688;
	background: transparent;
	color: #fff;
	cursor: pointer;
	position: relative;
	overflow: hidden;

}
span{
	 background: #009688;
	 height: 100;
	 width: 100;
	 border-radius: 25px;
	 position: absolute;
	 left: 0;
	 bottom: 0;
	 z-index: -1;
	 transition: 0.5s;
	 pointer-events: cursor;
}
button:hover span{
	width: 100%

}
button:hover{
	border: none;
}
</style>
</html>