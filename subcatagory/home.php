<?php
include('../includes/functions.php');
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
</head>
<title>Welcome Guest</title>
<style>
h2{
	color:#D1B513;
}
p{
	text-decoration="yellow";
	margin-left:60px; 
	font-size:18px; 
	font-family:Ubuntu;
	line-height:5px;
}
#bottom{
	height:60%;
	width:100%;
	background-color:grey;
	position:absolute;
}
div.outer{ 
	height: 24px; 
}
div.outer img { 
	
	opacity:0.4; 
}
div.outer img:hover{
	opacity:1;
}
body{
	margin:0px;
	background-color:#F4D03F;
	width:100%;
}
div.tfield{
	background-color:#222222;
}
div.tfield input[type="text"]{
	position:fixed;
	left:55px;
	top:10px;
	width:400px;
	height:50px;
	z-index:10;
	background-color:#222222;
	border:none;
	color:white;
	font-size:100%;
}
div.tfield input[type="submit"]{
	position:fixed;
	left:460px;
	top:10px;
	width:60px;
	height:30px;
	z-index:10;
	background-color:#222222;
	color:white;
	border-radius:5px;
}
div.tfield input[type="submit"]:hover{
	background-color:blue;
}
input.myfield:focus{
	border:none;
}
div.tfield img{
	width:50px;
	height:50px;
	background-color:#222222;
	top:10px;
	left:5px;
	z-index:20;
	position:fixed;
}
#top{
	height:10%;
	width:100%;
	background-color:#222222;
	position:fixed;
	z-index:5;
}
#banner{
	height:100%;
	width:100%;
	z-index:-5;
	-webkit-animation-name:amish;
	-webkit-animation-duration:10s;
	background-image:url(1.jpg);
	position:fixed;
	background-repeat:no-repeat;
	background-size:100% 90%;
	-webkit-animation-iteration-count:1000;
}
@-webkit-keyframes amish {
	0%{background-image:url(1.jpg)}
	8%{background-image:url(2.jpg)}
	33%{background-image:url(2.jpg)}
	41%{background-image:url(3.jpg)}
	66%{background-image:url(3.jpg)}
	74%{background-image:url(1.jpg)}
	100%{background-image:url(1.jpg)}
}
#intro{
	height:400px;
	width:100%;
	background-image:url(intro.jpg);
	margin-top:550px;
	position:relative;
	background-size:100% 100%;
}
#intro2{
	height:588px;
	width:100%;
	background-image:url(aboutushome.png);
	position:relative;
	background-repeat:no-repeat;
	background-size:100% 100%;
}
#services{
	height:587px;
	width:100%;
	background-image:url(services.png);
	position:relative;
	background-repeat:no-repeat;
	background-size:100% 100%;
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
	color:#222222;}
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
#footernew{
	width:100%;
	height:444px;
	background-image:url(footernew.png);
	position:relative;
	background-repeat:no-repeat;
	background-size:100% 100%;}
a{
	display:block;
}
.featurebutton {
	background-color:#f4d03f;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:7px;
	border:2px solid #000000;
	display:inline-block;
	cursor:pointer;
	color:#000000;
	font-family:Verdana;
	font-size:17px;
	padding:21px 56px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
	position:absolute;
	margin-top:810px;
	z-index:2;
	margin-left:42.5%;
	width:6%;
}
.featurebutton:active {
	position:relative;
	top:1px;
}
.featurebutton:hover{
	background-color:#222222;
	color:white;
	border:2px solid #f4d03f;
}
#testimonials{
	height:500px;
	width:100%;
	background-image:url(yoyo2.gif);
	background-size:100% 100%;
}
#tbutton1{
	width:45%;
	height:330px;
	background-color:#f4d03f;;
	position:absolute;
	margin-top:250px;
	margin-left:5%;
	z-index:3;
	opacity:0;
	transition:all 0.1s ease-in;
	border-radius:5px;
}
#tbutton1:hover{
	opacity:0.2;
}
#tbutton2{
	width:47%;
	height:330px;
	background-color:#f4d03f;;
	position:absolute;
	margin-top:250px;
	margin-left:50%;
	z-index:3;
	opacity:0;
	transition:all 0.1s ease-in;
	border-radius:5px;
}
#tbutton2:hover{
	opacity:0.2;
}
#tbutton3{
	width:30%;
	height:425px;
	background-color:red;
	position:absolute;
	margin-top:150px;
	margin-left:4.7%;
	z-index:3;
	opacity:0;
	transition:all 0.1s ease-in;
	border-radius:5px;
}
#tbutton3:hover{
	opacity:0.2;
}
#tbutton4{
	width:30%;
	height:425px;
	background-color:red;
	position:absolute;
	margin-top:150px;
	margin-left:35%;
	z-index:3;
	opacity:0;
	transition:all 0.1s ease-in;
	border-radius:5px;
}
#tbutton4:hover{
	opacity:0.2;
}
#tbutton5{
	width:30%;
	height:425px;
	background-color:red;
	position:absolute;
	margin-top:150px;
	margin-left:65.5%;
	z-index:3;
	opacity:0;
	transition:all 0.1s ease-in;
	border-radius:5px;
}
#tbutton5:hover{
	opacity:0.2;
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
div.block{
	background-color:white;
	border:10px solid green;
	width:200px;
	height:300px;
	position:relative;
	box-shadow: 10px 10px 5px #888888;
}
div.block div.name{
	font-family: "Papyrus";
	font-size: 20px;
	font-weight:bold;
	position:relative;
	top:5px;
	margin:0;
}
div.block div.image img{
	top:20px;
	display:block;
	margin:0 auto;
	width:100px;
	height:150px;
	position:relative;
}
div.block div.price{
	position:relative;
	top:30px;
}
div.block div.view button {
  position:relative;
  top:35px;
  cursor: pointer;
  background: #FF9933;
  width: 100%;
  border: 0;
  padding: 10px 15px;
  color: #ffffff;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}
div.block div.view button:hover {
  background: #178ab4;
}
div.block div.add button {
  position:relative;
  top:35px;
  cursor: pointer;
  background: red;
  width: 100%;
  border: 0;
  padding: 10px 15px;
  color: #ffffff;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}
div.block div.add button:hover {
  background: #178ab4;
}
div.block div.view button a{
text-decoration:none;
}
div.block div.add button a{
text-decoration:none;
}
</style>
<body>
<div class="tfield">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="query" placeholder="So, What do you need?" class="myfield"/>
<input type="submit" name="submit" value="&#10149;"/>
<img src="search.png"/>
</form>
</div>
<?php
	if(isset($_GET['submit'])){
	$query=$_GET['query'];
	$get_pro = "select * from products where products_keywords like '%$query%'";
	$run_pro = mysqli_query($connect,$get_pro);
	if($run_pro)
	{
		while($row_pro = mysqli_fetch_array($run_pro))
		{
			$pro_id = $row_pro['products_id'];
			$pro_cat = $row_pro['products_cat'];
			$pro_title = $row_pro['products_title'];
			$pro_price = $row_pro['products_price'];
			$pro_image = $row_pro['products_image'];
			echo "<td><div class='block'><center><div class='name'>$pro_title</div><div class='image'><img src='product_images/$pro_image'/>
				</div><div class='price'>Price: $ $pro_price</div><div class='add'><button onclick='error()'>ADD TO CART</button>
				</div><script>function error(){ alert('Please, Login first!');}</script></center></div></td>";
				
		}
	}
	else
	{
		echo "<h2 style='padding:20px;'>No items matching</h2>";
	}
	}
?>
<div id="top">
</div>
<a href="../area/area.php"><div id="btn1">&nbsp;&nbsp;&nbsp;&nbsp;Area</div></a>
<a href="../catagory/catagory.php"><div id="btn2">&nbsp;&nbsp;Categories</div></a>
<div id="btn3" onclick="error()">&nbsp;&nbsp;Cart</div>
<script>function error(){ alert('Please, Login first!');}</script>
<a href="../contactus/contactus.php"><div id="btn4">&nbsp;&nbsp;Contact Us</div></a>
<br><br><br><br>
<div id="banner">
</div>
<a href="#feature" class="featurebutton">SeeBelow</a>
<div id="intro"></div>
<br><br><br>
<table id="feature">
<?php
getsubpro();
?>
</table>
<div id="bottom" class="outer">
<table>
<td nowrap="nowrap">
<h2 style='margin-left:60px; margin-top:50px; font-size:35px; font-family:Arial;'>About</h2>
<p>We strive to deliver a level of service</p>
<p>that exceeds the expectations of our</p>
<p>customers.</p>
<br>
<p>If you have any question about our</p>
<p>products or services, please do not</p>
<p>hesitate to contact us. We have friendly,</p>
<p>knowledgeable representatives</p>
<p>available seven days a week to assist</p>
<p>you.</p>
</td>
<td>
<h2 style="margin-left:630px; font-size:35px; font-family:Arial;">Social</h2>
<span style="position:absolute;right:300px;bottom:100px; ">
<a href="https://www.facebook.com/GroceryFocus"><img src="fb.png" width="50" height="50" /></a>
</span>
<span style="position:absolute;right:230px;bottom:100px; ">
<a href="https://www.twitter.com/groceryfocus"><img src="tw.png" width="50" height="50" /></a>

</span>
<p style="margin-left:630px;">Follow us on</p>
<p style="margin-left:630px;">our Facebook and</p>
<p style="margin-left:630px;">Twitter page.</p>
</td>
</table>
</div>
</body>
</html>