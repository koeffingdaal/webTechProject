<html>
<head>
<title> Bus Ticket Booking</title>
<link rel="stylesheet" href="booking.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="booking-form-box"> 
<div class="radio btn">
<input type="radio" class="btn" name="check" checked="checked"><span style="color:white;">One Way</span>
<input type="radio" class="btn" name="check"><span style="color:white;">Roundtrip</span>
</div>

<div class="booking-form">
<label style="color:white;"> Travelling From</label>

<select class="custom-select" class="form-control">
<option disabled selected>Choose One</option>
<option value="1">Gabtoli </option>
<option value="2">Shyamoli </option>
<option value="2">Kallyanpur </option>
<option value="2">Kafrul </option>
<option value="2">Azampur </option>
<option value="2">Badda </option>
</select> 

<label style="color:white;"> Travelling To </label>
<select class="custom-select" class="form-control">
<option disabled selected>Choose One</option>
<option value="1">Chittagong </option>
<option value="2">Cox's Bazar </option>
<option value="2">Comilla </option>
<option value="2">Sylhet </option>
<option value="2">Rajshahi </option>
<option value="2">Khulna </option>
</select>

<div class="input-grp">
<Label style="color:white;">Date of Journey</label>
<input type="date" class="form-control select-date">
</div>

<div class="input-grp">
<Label style="color:white;">Return of Journey</label>
<input type="date" class="form-control select-date">
</div>

<div class="input-grp">
<Label style="color:white;">Adults</label>
<input type="number" class="form-control" value="1">
</div>

<div class="input-grp">
<Label style="color:white;">Childen</label>
<input type="number" class="form-control" value="0">
</div>

<div class="input-grp">
<Label style="color:white;">Bus Type</label>
<select class="custom-select">
<option disabled selected>Choose One</option>
<option value="1">AC Bus </option>
<option value="2">Non-AC Bus </option>
</select>
</div>

<div class="input-grp">
<button type="button" class="btn btn-primary bus">Show Buses</button>
</div>

</div>
</div>
</body>
</html>