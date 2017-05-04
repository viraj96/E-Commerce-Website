<?php
include("../../includes/functions.php");
session_start();
?>
<html>
<head>
<title>Cart</title>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<style type="text/css">
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
	position:relative;
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
	margin:0;
	background-color: #222222;
	font-family: "Copperplate Gothic Bold", Georgia, Serif;
}
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
#top1{
	height: 100px;
	width:100%;
	border-bottom: 4px solid #f4d03e;
}
#main div{
	display:inline-block;
}
#left{
	height:100%;
	position: relative;
	width:250px;
	border-right: 4px solid #f4d03e;
	font-family: "Copperplate Gothic Bold", Georgia, Serif;
}
#left a{
	display: block;
	color:#222222;
	background-color: #f4d03e;
	border-top-left-radius: 25px;
	margin:5px 0 5px 5px;
	padding: 50px;
	text-decoration: none;
	font-weight: bold;
	font-size:25px;
	font-family: "Castellar", Georgia, Serif;
}
#left a:hover{
	background-color: #66FF33;
}
#right{
	width:75%;
	height: 100%;
	position: absolute;
	padding:10px;
	display:none;
	z-index: 2;
	margin:10px;
}
#table{
	margin-top: 50px;
}
.button{
  cursor: pointer;
  background: #FF9933;
  width: 100%;
  height: 100px;
  border: 0;
  font-size: 40px;
  font-family:Georgia;
  padding: 10px 15px;
  margin-top: 50px;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}
.button:hover{
  background: #178ab4;
}
td{
	text-align: center;
}
input{
	display:inline-block;
	color: black;
}
td input.input{
	width:10px;
	color:black;
	border: 1px solid #d9d9d9;
	padding: 10px 15px;
	font-weight: 400
}
</style>
</head>
<body>
<div id="top">
</div>
<a href="../catagory/catagorycustomer.php"><div id="btn2">&nbsp;&nbsp;Categories</div></a>
<a href="../contactus/contactuscustomer.php"><div id="btn3">&nbsp;&nbsp;Contact Us</div></a>
<a href="../login.php"><div id="btn4">&nbsp;&nbsp;Log Out</div></a>
<div id="top1"></div>
<div id="main">
<div id="left">
	<a href="" style="background-color: #66FF33; font-size:20px;">View Cart</a>
	<a href="">Checkout</a>
</div>
<div id="right">
	<center>
	<h1>Items In Your Cart</h1>
	</center>
	<form action="cart.php" method="post">
	<table align="center" border='1' id="table" style="bordercolor:white; opacity:0.8; background-color:#FF9933;" cellpadding="20" width='100%'>
		<tr>
			<th>Remove</th>
			<th>Item Number</th>
			<th>Item Name</th>
			<th>Item Desc</th>
			<th>Quantity</th>
			<th>Item Price</th>
		</tr>
		<?php
			global $connect;
			$total=0;
			$count=0;
			$ip = getIp();
			$user = $_SESSION['username'];
			$id = "select id from customer where username='$user'";
			$id_run = mysqli_query($connect,$id);
			$array = mysqli_fetch_array($id_run);
			$id1 = $array['id'];
			$sel_price = "select * from cart where ip_add = '$ip' and id='$id1'";
			$run_price = mysqli_query($connect,$sel_price);
			while($p_price=mysqli_fetch_array($run_price))
			{
				$pro_id = $p_price['p_id'];
				$pro_price = "select * from products where products_id = '$pro_id'";
				$run_pro_price = mysqli_query($connect,$pro_price);
				while($p_pro_price = mysqli_fetch_array($run_pro_price))
				{
					$product_title = $p_pro_price['products_title'];
					$product_image = $p_pro_price['products_image'];
					$product_desc = $p_pro_price['products_desc'];
					$single_price = $p_pro_price['products_price'];
					$total += $p_pro_price['products_price'];
					$count += 1;
		?>
		<tr>
			<td><input type="checkbox" name="remove[]" id="c1" value="<?php echo $pro_id; ?>"></input></td>
			<td><?php echo $count; ?></td>
			<td><img src="../../admin/product_images/<?php echo $product_image; ?>" width="60" height="60"/></td>
			<td><?php echo $product_desc; ?></td>
			<td><input type="text" size="1" name="qty" /><br><br>
				<input type="submit" style="border-radius:5px; cursor:pointer;" name="add_qty" value="SET"></td>
			<td><?php echo "₹ ".$single_price; ?></td>
		</tr>
		<?php 
				}
			}
		?>
		<tr><td></td>
			<?php
					global $connect;
					if(isset($_POST['add_qty']))
					{
						$qty = $_POST['qty'];
						$update_qty = "UPDATE `cart` SET `qty`='$qty'";
						$run_qty = mysqli_query($connect,$update_qty);
						if($run_qty)
						{
							echo "<script>alert('Quantity has been updated!')</script>";
						}
						$total = $total*$qty;
					}
					
					
				?>

			<td align="right" colspan="4"><h1>Total Price:</h1></td>
			<td align='right'><?php echo "₹ ".$total; ?></td>
		</tr>
	</table>
	<input type="submit" name='update_cart' value="UPDATE CART" style="border-radius:10px;" class="button"/>
	</form>
	
	<?php
			global $connect;
						$ip = getIp();
						if(isset($_POST['update_cart']))
						{
							foreach($_POST['remove'] as $remove_id)
							{
								$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
								$run_delete = mysqli_query($connect,$delete_product);
								if($run_delete)
								{
									echo "<script>alert('Product has been deleted!')</script>";
									echo "<script>window.open('cart.php','_self')</script>";
								}
							}
						}
						
				?>
</div>
</div>
</body>
</html>