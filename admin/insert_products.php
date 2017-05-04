<!DOCTYPE>
<?php
$connect=mysqli_connect("localhost","root","","ecommerce");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MYSQL: ".mysqli_connect_errno();
}
?>
<html>
	<head>
		<title>Admin</title>
		<script src="//tinymce.cachefly.net/4.2/tinymce.min.js">
		</script>
		<script>tinymce.init({selector:'textarea'});
		</script>
	</head>
<body bgcolor="skyblue">
	<form action="insert_products.php" method="post" enctype="multipart/form-data">
		<table align="center" width="1000" border="2" bgcolor="orange">
			<tr align="center">
				<td colspan="7">
					<h2>Insert New Post Here</h2>
				</td>
			</tr>
			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Product Sub-Category:</b></td>
				<td>
					<select name="product_cat" required>
						<option>Select a sub-category</option>
						<?php
							$get_cats = "select * from subcats";
							$run_cats = mysqli_query($connect,$get_cats);
							while($row_cats = mysqli_fetch_array($run_cats))
							{
								$sub_id = $row_cats['sub_id'];
								$sub_title = $row_cats['sub_title'];
								echo "<option value='$sub_id'>$sub_title</option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="product_desc" colspan="20" rows="10"></textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Product Keywords:</b></td>
				<td><input type="text" name="product_keywords" size="50" required/></td>
			</tr>
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if(isset($_POST['insert_post']))
	{
			$product_title = $_POST['product_title'];
			$product_cat = $_POST['product_cat'];
			$product_price = $_POST['product_price'];
			$product_desc = $_POST['product_desc'];
			$product_keywords = $_POST['product_keywords'];
			$product_image = $_FILES['product_image']['name'];
			$product_image_tmp = $_FILES['product_image']['tmp_name'];
			
			move_uploaded_file($product_image_tmp,"product_images/$product_image");
			
			
			$insert_pro = mysqli_query($connect,"INSERT INTO `products` (`products_cat`,`products_title`,`products_price`,`products_desc`,`products_image`,`products_keywords`) 
			VALUES ('".mysqli_escape_string($connect,$product_cat)."','".mysqli_escape_string($connect,$product_title)."','".mysqli_escape_string($connect,$product_price)."','".mysqli_escape_string($connect,$product_desc)."','".mysqli_escape_string($connect,$product_image)."','".mysqli_escape_string($connect,$product_keywords)."')") or die(mysqli_error($connect));
			if($insert_pro)
			{
				echo "<script>alert('Product has been inserted!')</script>";
				echo "<script>window.open('insert_products.php','_self')</script>";
			}
	}
?>


























