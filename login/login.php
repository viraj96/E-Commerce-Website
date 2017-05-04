<!DOCTYPE html>
<?php
include('../includes/functions.php');
?>
<html >
<head>
<title>Login/Signup</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="title"><center>Welcome To The Most</center></h1>
<br>
<h1 class="title" id="change"><center>|</center></h1>
<br>
<div class="module form-module">
<div class="toggle" id="click"><i class="fa fa-times fa-pencil"></i>
	<div class="tooltip"><h2 style='display:inline; color:white;'>&#10096;&#10096;&#10096;</h2> NEW USER</div>
</div>
  <div class="form1" id="login" style='display: block; padding: 40px;'>
    <h2>Login to your account</h2>
	<?php
		login();
	?>
    <form method="post" action="login.php">
      <input type="text" placeholder="Username" name="username" id="username"/>
      <input type="password" placeholder="Password" name="password" id="password"/>
      <input style="border-radius:10px; cursor: pointer; background: #FF9933; width: 100%; border: 0; padding: 10px 15px; color: #ffffff; -webkit-transition: 0.3s ease; transition: 0.3s ease;" type="submit" name="submit" value="Login"/>
    </form>
  </div>
  <div class="form2" id="signup" style='display: none;
	padding:40px;'>
    <h6>Create an account</h6>
    <form action="login.php" method="post">
      <input type="text" placeholder="New username" id="username" name="username">
      <input type="password" placeholder="New password" id="password" name="password">
      <input type="email" placeholder="Email Address" id="email" name="email">
      <input style="border-radius:10px; cursor: pointer; background: #FF9933; width: 100%; border: 0; padding: 10px 15px; color: #ffffff; -webkit-transition: 0.3s ease; transition: 0.3s ease;" type="submit" name="submit" value="Register"/>
    </form>
	<?php
		signup();
	?>
  </div>
</div>
<script src='toggle.js'></script>
<script src="change.js"></script>
<script src="input.js"></script>
<script src="splash.js"></script>
</body>
</html>
