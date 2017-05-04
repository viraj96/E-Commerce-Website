<!DOCTYPE>
<?php
session_start();
$connect=mysqli_connect("localhost","root","","ecommerce");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MYSQL: ".mysqli_connect_errno();
}
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
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
td{
	color:#FFFFFF;
	font-family: "Copperplate Gothic Light";
	font-size:36px;
}
a{
	text-decoration:none;
	color:#FFF;
	display:block;
	font-size:24px;
	font-family:"Copperplate Gothic Light";
}
a:hover{
	font-size:32px;
	font-family:"Copperplate Gothic Bold";
}
marquee{
	color:#FFFFFF;
	font-family:"Comic Sans MS", cursive;
	alignment-adjust:middle;
	font-size:18px;
	font-weight:bold;
	font-style:italic;
	marquee-style:slide;

}
marquee.opp{
	marquee-direction:reverse;
	marquee-style:alternate;
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
</style>
<title>Welcome <?php echo $_SESSION['username']; ?></title>
</head>
<body bgcolor="black" style='margin:0;'>
<div id="top">
</div>
<a href="../cart/cart.php"><div id="btn2">&nbsp;&nbsp;Cart</div></a>
<a href="../contactus/contactuscustomer.php"><div id="btn3">&nbsp;&nbsp;Contact Us</div></a>
<a href="../login.php"><div id="btn4">&nbsp;&nbsp;Logout</div></a>
<img src="try.jpg" style='width:100%'>
<table width="88%" height="561" border="0" align="center">
  <tr>
    <td width="32%" style="border-radius:10px; border:outset;" rowspan="3" background="food.jpg" style="background-repeat:no-repeat;">
    <center>
	<b><u>FOOD MART</u></b>
    <?php
	$get_subcats = "select * from subcats";
	$run_subcats = mysqli_query($connect,$get_subcats);
	while($row_subcats = mysqli_fetch_array($run_subcats))
	{
		$sub_id = $row_subcats['sub_id'];
		$sub_title = $row_subcats['sub_title'];
		$cat = $row_subcats['cat'];
		$str='Food Mart';
		if(strcmp($cat,$str)==0)
		{
			echo "<li><a href='../subcatagory/homecustomer.php?sub=$sub_id'>$sub_title</a></li>";
		}
	}
	?>
	</center>
	</td>
    
    </td>
    <td width="35%" style="border-radius:10px; border:outset;" rowspan="2" background="pulses.jpg" style="background-repeat:no-repeat;">
	<center>
	<b><u>GROCERY AND STAPLES</u></b>
    <?php
	$get_subcats = "select * from subcats";
	$run_subcats = mysqli_query($connect,$get_subcats);
	while($row_subcats = mysqli_fetch_array($run_subcats))
	{
		$sub_id = $row_subcats['sub_id'];
		$sub_title = $row_subcats['sub_title'];
		$cat = $row_subcats['cat'];
		$str='Grocery And Staples';
		if(strcmp($cat,$str)==0)
		{
			echo "<li><a href='../subcatagory/homecustomer.php?sub=$sub_id'>$sub_title</a></li>";
		}
	}
	?>
	</center>
	</td>
    
	<td width="33%" rowspan="3" style="border-radius:10px; border:outset;"  background="beauty.jpg" style='background-repeat:no-repeat'>
    <center>
	<b><u>BEAUTY AND PERSONAL CARE</u></b>
    <?php
	$get_subcats = "select * from subcats";
	$run_subcats = mysqli_query($connect,$get_subcats);
	while($row_subcats = mysqli_fetch_array($run_subcats))
	{
		$sub_id = $row_subcats['sub_id'];
		$sub_title = $row_subcats['sub_title'];
		$cat = $row_subcats['cat'];
		$str='Beauty And Personal Care';
		if(strcmp($cat,$str)==0)
		{
			echo "<li><a href='../subcatagory/homecustomer.php?sub=$sub_id'>$sub_title</a></li>";
		}
	}
	?>
	</center>
	</td>
  </tr>  
  <tr>
  </tr>
  <tr>
    <td rowspan='4' style="border-radius:10px; border:outset;" background="clothes.jpg" style="background-repeat:no-repeat">
    <center>
	<b><u>OTHERS</u></b>
	<?php
	$get_subcats = "select * from subcats";
	$run_subcats = mysqli_query($connect,$get_subcats);
	while($row_subcats = mysqli_fetch_array($run_subcats))
	{
		$sub_id = $row_subcats['sub_id'];
		$sub_title = $row_subcats['sub_title'];
		$cat = $row_subcats['cat'];
		$str='Others';
		if(strcmp($cat,$str)==0)
		{
			echo "<li><a href='../subcatagory/homecustomer.php?sub=$sub_id'>$sub_title</a></li>";
		}
	}
	?>
	</center>
	</td>
  </tr>
  
  <tr>
    <td rowspan="2" background="light.jpg" style="border-radius:10px; border:outset;" style='background-repeat:no-repeat;'>
    <center>
	<b><u>HOUSEHOLD</u></b>
    <?php
	$get_subcats = "select * from subcats";
	$run_subcats = mysqli_query($connect,$get_subcats);
	while($row_subcats = mysqli_fetch_array($run_subcats))
	{
		$sub_id = $row_subcats['sub_id'];
		$sub_title = $row_subcats['sub_title'];
		$cat = $row_subcats['cat'];
		$str='Household';
		if(strcmp($cat,$str)==0)
		{
			echo "<li><a href='../subcatagory/homecustomer.php?sub=$sub_id'>$sub_title</a></li>";
		}
	}
	?>
	</center>
	</td>
    
    <td rowspan="2" background="coffee.jpg" style="border-radius:10px; border:outset;" style='background-repeat:no-repeat'>
    <center>
	<b><u>BEVERAGES</u></b>
	<?php
	$get_subcats = "select * from subcats";
	$run_subcats = mysqli_query($connect,$get_subcats);
	while($row_subcats = mysqli_fetch_array($run_subcats))
	{
		$sub_id = $row_subcats['sub_id'];
		$sub_title = $row_subcats['sub_title'];
		$cat = $row_subcats['cat'];
		$str='Beverages';
		if(strcmp($cat,$str)==0)
		{
			echo "<li><a href='../subcatagory/homecustomer.php?sub=$sub_id'>$sub_title</a></li>";
		}
	}
	?>
	</center>
	</td>
  </tr>
  
  <tr>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
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
