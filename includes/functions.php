<?php
$connect=mysqli_connect("localhost","root","","ecommerce");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MYSQL: ".mysqli_connect_errno();
}
function getIp() 
{
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
	{
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } 
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
	{
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
function cart()
{
	if(isset($_GET['add_cart']))
	{
		global $connect;
		$ip = getIp();
		$user=$_SESSION['username'];
		$pro_id = $_GET['add_cart'];
		$id = "select id from customer where username='$user'";
		$id_run = mysqli_query($connect,$id);
		$array = mysqli_fetch_array($id_run);
		$id1 = $array['id'];
		$pro_cat = "select * from products where products_id='$pro_id'";
		$pro_cat_run = mysqli_query($connect,$pro_cat);
		$array1 = mysqli_fetch_array($pro_cat_run);
		$pro_cat1 = $array1['products_cat'];
		$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id' AND id='$id1'";
		$run_check = mysqli_query($connect,$check_pro);
		if(mysqli_num_rows($run_check)>0)
		{
			echo "";
		}
		else
		{
			$insert_pro = mysqli_query($connect,"INSERT INTO `cart` (`p_id`,`ip_add`,`id`) VALUES ('".mysqli_escape_string($connect,$pro_id)."','".mysqli_escape_string($connect,$ip)."','".mysqli_escape_string($connect,$id1)."')");
			if($insert_pro)
			{
				echo "<script>alert('Product has been added to cart!')</script>";
				echo "<script>window.open('http://localhost:8888/ecommerce/login/subcatagory/homecustomer.php?sub=$pro_cat1','_self')</script>";
				exit;
			}
		}
	}
}
function total_price()
{
	global $connect;
	$total=0;
	$ip = getIp();
	$sel_price = "select * from cart where ip_add = '$ip'";
	$run_price = mysqli_query($connect,$sel_price);
	while($p_price=mysqli_fetch_array($run_price))
	{
		$pro_id = $p_price['p_id'];
		$pro_price = "select * from products where products_id = '$pro_id'";
		$run_pro_price = mysqli_query($connect,$pro_price);
		while($p_pro_price = mysqli_fetch_array($run_pro_price))
		{
			$total += $p_pro_price['products_price'];
		}
	}
	echo "₹ ".$total;
}
function getsubpro()
{
	if(isset($_GET['sub']))
	{
			$sub_id = $_GET['sub'];
			$count=0;
			global $connect;
			$get_sub_pro = "select * from products where products_cat='$sub_id'";
			$run_sub_pro = mysqli_query($connect,$get_sub_pro);
			$count_subs = mysqli_num_rows($run_sub_pro);
			while($row_sub_pro = mysqli_fetch_array($run_sub_pro))
			{
				$pro_id = $row_sub_pro['products_id'];
				$pro_cat = $row_sub_pro['products_cat'];
				$pro_title = $row_sub_pro['products_title'];
				$pro_price = $row_sub_pro['products_price'];
				$pro_image = $row_sub_pro['products_image'];
				$count+=1;
				if($count<=6){
				echo "<td><div class='block'><center><div class='name'>$pro_title</div><div class='image'><img src='../admin/product_images/$pro_image'/>
				</div><div class='price'>Price: ₹ $pro_price</div><div class='add'><button onclick='error()'>ADD TO CART</button>
				</div><script>function error(){ alert('Please, Login first!');}</script></center></div></td>";}
				else{
					echo"<tr><td><div class='block'><center><div class='name'>$pro_title</div><div class='image'><img src='../admin/product_images/$pro_image'/>
				</div><div class='price'>Price: ₹ $pro_price</div><div class='add'><button onclick='error()'>ADD TO CART</button>
				</div><script>function error(){ alert('Please, Login first!');}</script></center></div></td>";
					$count=0;
				}
			}		
	}
}
function getsubproc()
{
	if(isset($_GET['sub']))
	{
			$sub_id = $_GET['sub'];
			$count=0;
			global $connect;
			$get_sub_pro = "select * from products where products_cat='$sub_id'";
			$run_sub_pro = mysqli_query($connect,$get_sub_pro);
			$count_subs = mysqli_num_rows($run_sub_pro);
			while($row_sub_pro = mysqli_fetch_array($run_sub_pro))
			{
				$pro_id = $row_sub_pro['products_id'];
				$pro_cat = $row_sub_pro['products_cat'];
				$pro_title = $row_sub_pro['products_title'];
				$pro_price = $row_sub_pro['products_price'];
				$pro_image = $row_sub_pro['products_image'];
				$count+=1;
				if($count<=6){
				echo "<td><div class='block'><center><div class='name'>$pro_title</div><div class='image'><img src='../../admin/product_images/$pro_image'/>
				</div><div class='price'>Price: ₹ $pro_price</div><div class='add'><a href = 'homecustomer.php?add_cart	=$pro_id'><input type='submit' value='ADD TO CART'/></a>
				</div></center></div></td>";}
				else{
					echo"<tr><td><div class='block'><center><div class='name'>$pro_title</div><div class='image'><img src='../../admin/product_images/$pro_image'/>
				</div><div class='price'>Price: ₹ $pro_price</div><div class='add'><a href = 'homecustomer.php?add_cart=$pro_id'><input type='submit' value='ADD TO CART'/></a>
				</div></center></div></td>";
					$count=0;
				}
			}		
	}
}
function login()
{
global $connect;
session_start();
if(isset($_POST['submit']))
{
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	$query="SELECT * FROM customer WHERE username='$username' AND password='$password'";
	$result=mysqli_query($connect,$query) or die(mysqli_error($connect));
	$num_row=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	if($num_row==1)
	{
		$_SESSION['username']=$row['username'];
		header("Location:catagory/catagorycustomer.php");
		exit;
	}
}
}
function signup()
{
	global $connect;
	if(isset($_SESSION['err']))
	{
		echo '<p>'.$_SESSION['err']['username'].'</p>';
		echo '<p>'.$_SESSION['err']['email'].'</p>';
		echo '<p>'.$_SESSION['err']['password'].'</p>';
		unset($_SESSION['err']);
	}
	if(isset($_POST['submit']))
	{
		if($_POST['username']=='')
		{
			$_SESSION['err']['username']="Username is required.";
		}
		if($_POST['email']=='')
		{
		$_SESSION['err']['email']="E-mail is required.";
		}
		else
		{
			if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/",$_POST['email']))
			{
				$email=$_POST['email'];
				$sql="SELECT * FROM customer WHERE email='$email'";
				$result=mysqli_query($connect,$sql) or die(mysqli_error($connect));
				if(mysqli_num_rows($result)>0)
				{
					$_SESSION['err']['email']="This E-mail is already used.";
				}
			}
			else
			{
				$_SESSION['err']['email']="Your E-mail is not valid.";
			}
		}
		if($_POST['password']=='')
		{
			$_SESSION['err']['password']="Password is required.";
		}
		if(isset($_SESSION['err']))
		{
			header("Location:login.php");
			exit;
		}
		else
		{
			$username=$_POST['username'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$ip=getIp();
			$sqli="INSERT INTO `customer` (`username`,`email`,`password`,`ip_add`) VALUES ('".mysqli_escape_string($connect,$username)."','".mysqli_escape_string($connect,$email)."','".mysqli_escape_string($connect,$password)."','".mysqli_escape_string($connect,$ip)."')";
			$resulti=mysqli_query($connect,$sqli);
			if($resulti)
			{
				echo "<script>alert('You have successfully registered!')</script>";
				echo "<script>window.open('login.php','_self')</script>";
			}
		}
	}
}

?>