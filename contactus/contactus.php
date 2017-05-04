<?php
include('../includes/functions.php');
?>
<html>
<head>
<title>
Contact Us
</title>
<style>
#top{
	height:10%;
	width:100%;
	background-color:#222222;
	position:fixed;
	z-index:5;
}
#btn1{
	z-index:5;
	margin-left:43%;
	margin-top:15px;
	height: 28px;
	width: 120px;
	background-color: #222222;
	position:fixed;
	transition: all 0.1s ease;
	border-radius: 1px;
	font-family:Verdana;
	font-size:17px;
	color:#F4D03F;
	border:1px solid #F4D03F;
	box-shadow: 15px 15px 20px black;
}
#btn1:hover{
	background-color:#F4D03F;
	color:#222222;
}
#btn2{
	z-index:5;
	margin-left:58%;
	margin-top:15px;
	height: 28px;
	width: 120px;
	background-color: #222222;
	position:fixed;
	font-family:Verdana;
	font-size:17px;
	transition: all 0.1s ease;
	border-radius: 1px;
	box-shadow: 15px 15px 20px black;
	color:#F4D03F;
	border:1px solid #F4D03F;
}
#btn2:hover{
	background-color:#F4D03F;
	color:#222222;
}
#btn3{
	z-index:5;
	margin-left:73%;
	margin-top:15px;
	height: 28px;
	width: 120px;
	font-family:Verdana;
	font-size:17px;
	background-color: #222222;
	position:fixed;
	transition: all 0.1s ease;
	border-radius: 1px;
	box-shadow: 15px 15px 20px black;
	color:#F4D03F;
	border:1px solid #F4D03F;
}
#btn3:hover{
	background-color:#F4D03F;
	color:#222222;
}
#btn4{
	z-index:5;
	margin-left:88%;
	margin-top:15px;
	height: 28px;
	width: 120px;
	font-family:Verdana;
	font-size:17px;
	background-color: #222222;
	position:fixed;
	transition: all 0.1s ease;
	border-radius: 1px;
	box-shadow: 15px 15px 20px black;
	color:#F4D03F;
	border:1px solid #F4D03F;
}
#btn4:hover{
	background-color:#F4D03F;
	color:#222222;
}
div.image img{
	width:100%;
	height:auto;
	position:relative;
	top:50px;
}
div.details img{
	width:100%;
	height:auto;
	position:relative;
	top:50px;
}
div.details input.tfield1{
	position:absolute;
	top:880px;
	right:400px;
	width:350px;
	height:50px;
	box-sizing: border-box;
	padding: 10px 15px;
	border: 1px solid #d9d9d9;
	z-index:10;
}
div.details input.tfield2{
	position:absolute;
	top:1020px;
	left:600px;
	width:350px;
	height:50px;
	box-sizing: border-box;
	padding: 10px 15px;
	border: 1px solid #d9d9d9;
	z-index:10;
}
div.details textarea{
	position:absolute;
	top:1180px;
	right:400px;
	width:350px;
	height:150px;
	padding: 10px 15px;
	border: 1px solid #d9d9d9;
	z-index:10;
}
div.details input.sub{
	position:absolute;
	top:1350px;
	right:500px;
    cursor: pointer;
	background: #222222;
    width: 25%;
    border: 0;
    padding: 10px 15px;
    color: #ffffff;
    -webkit-transition: 0.3s ease;
	transition: 0.3s ease;
}
div.details input.sub:hover{
  background: #178ab4;
}
</style>
</head>
<body style='margin:0'>
<div id="top">
</div>
<a href="../area/area.php"><div id="btn2">&nbsp;&nbsp;&nbsp;&nbsp;Area</div></a>
<a href="../catagory/catagory.php"><div id="btn3">&nbsp;&nbsp;Catagory</div></a>
<div id="btn4" onclick="error()">&nbsp;&nbsp;Cart</div>
<script>function error(){ alert('Please, Login first!');}</script>
<div class="image">
<img src="aboutus.png">
</div>
<div class="details">
<img src="details.jpg">
<form action="contactus.php" method="post">
<input name="name" type="text" class="tfield1" placeholder="Enter Your Full Name" style="border-radius:10px;"></input>
<input name="email" type="email" class="tfield2" placeholder="Email Id" style="border-radius:10px;"></input>
<textarea name="text" style="border-radius:10px;" placeholder="Enter Your Message">
</textarea>
<input type="submit" name="submit" class="sub" value="Submit" style="border-radius:10px;"></input>
</form>
<?php
global $connect;
if(isset($_POST['submit']))
{
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$text=$_POST['text'];
	$query="INSERT INTO `contactus` (`name`,`email`,`text`) VALUES ('".mysqli_escape_string($connect,$name)."','".mysqli_escape_string($connect,$email)."','".mysqli_escape_string($connect,$text)."')";
	$result=mysqli_query($connect,$query) or die(mysqli_error($connect));
	if($result)
	{
		echo "<script>alert('Thank You for your valuable input!')</script>";
		echo "<script>window.open('contactus.php','_self')</script>";
	}
}
?>
</div>
</body>
</html>
