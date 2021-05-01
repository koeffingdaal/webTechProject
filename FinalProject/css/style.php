body
{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(search.jpeg);
	background-position: center;
	background-size:cover;
	
}
.booking-form-box
{
	max-width:350px;
	border: 1px solid #ced4da;
	margin:10% auto 0;
}
.radio-btn
{
	margin: 0 20px;
}
.radio-btn .btn
{
	margin: 20px 10px 20px 0;
	box-shadow: none;
}
.radio-btn .btn::after
{
	content: '';
	height:15px;
	width: 15px;
	top: -2px;
	left: -1px;
	background-color: #fff;
	position: relative;
	display: inline-block;
	border: 3px solid #fff;
	visibility: visible;
	border-radius:50%;
}
.radio-btn .btn:checked::after
{
	content:'';
	background-color:#000;
	transition:0.5s;
}
.radio-btn span
{
	color: #fff;
	margin-right:5px;
	font-size:12px;
}
.booking-form-box{
	padding:0 20px 20px;
}
.booking-form label
{
	margin-bottom: 5px;
	margin-top:10px;
	font-size:12px;
	color:3px solid blue;
}
input::placeholder
{
	color:#fff !important;
}
.input-grp
{
	width:310px;
	display: inline-block; 
}

.form-control
{
	font-size:12px!important;
	border-radius:0!important;
	color:#fff!important;
	background:transparent!important;
	box-shadow:2px 2px 15px rgba(0,0,0,0.3)!important;
}

.select-date::-webkit-inner-spin-button,
.select-date::-webkit-inner-spin-button
{
	-webkit-appearance: none;
	margin:0;
}
.select-date::-webkit-calender-picker-indicator
{
	background:transparent!important;
}
.custom-select
{
	color:#fff!important;
	font-size:12px!important;
	border:1px solid #ced4da!important;
	box-shadow:none!important;
	border-radius:0!important;
	background:transparent!important;
}
.custom-select option
{
	color: #333;
}
.bus
{
	width:100%;
	padding:9px 0 !important;
	font-size:12px !important;
	border:1px solid #ced4da!important;
	box-shadow:2px 2px 15px rgba(0,0,0,0.3)!important;
	border-radius:0!important;
	background:transparent!important;
}
.bus:hover
{
	background:#fff!important;
	color:#000!important;
	transition:0.5s;
}