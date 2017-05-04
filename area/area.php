<!DOCTYPE>
<html >
<head>
<title>Area</title>
<link rel="stylesheet" href="style.css">
<style>
div.logo img{
	position:fixed;
	top:10px;
	left:10px;
	height:150px;
	width:auto;
}
div.fixed img{
	opacity:0.6;
}
div.fixed img:hover{
	opacity:1;
}
div.login button {
	position:fixed;
	top:50px;
	right:50px;
	cursor: pointer;
	background: #FF9933;
	border: 0;
	padding: 10px 15px;
	color: #ffffff;
	-webkit-transition: 0.3s ease;
	transition: 0.3s ease;
}
div.login button:hover {
  background: #178ab4;
}
</style>
</head>
<body>
<img src="back.jpg" style='position:fixed; top:0px; left:0px; width:100%; height:100%; z-index:-1;'>
<div class="login">
<button style='border-radius:10px;'><a href="../login/login.php" style="text-decoration:none; color:black;">Login/Signup</a></button>
</div>
<div class="logo">
<img src="mylogo.png">
</div>
<br><br><br><br><br><br><br><br>
<div class="module form-module">
  <div class="form1" id="login" style='display:block;
  padding: 40px;'>
    <h2 id="remove">Please Select Your Location:</h2>
    <form>
      <center>
	  <select id="field">
	  <option class="light">Enter</option>
	  <option>Sector 28</option>
	  <option>Sector 29</option>
	  <option>Sector 31</option>
	  <option>Sector 34</option>
	  <option>Sector 35</option>
	  <option>Sector 37</option>
	  <option>Green Field</option>
	  <option>Ashoka Enclave 1</option>
	  <option>Ashoka Enclave 1</option>
	  <option>Ashoka Enclave 3</option>
	  <option value="others" id="others">Others....</option>
	  </select>
	  <input class="write" id="enter" type="text" placeholder="Please Enter Any Other Location"></input>
	  <div id="mes" style='display:none;'>
	  <h2>View Our <a href="../catagory/catagory.php" style="text-decoration:none;">Website!</a></h2>
	  <h2>OR</h2>
	  <h2>Visit Us At Grocery Focus, Sector 37, Faridabad</h2>
	  </div>
	  </center>
  	  <a href="http://google.com" style="text-decoration:none;color:white; font-weight:bold;"><button id="but" class="but" style='border-radius:10px;text-decoration:none;'>Start Shopping</button></a>
    </form>
  </div> 
</div>
<div class="fixed">
<a href="https://www.facebook.com/GroceryFocus"><img src="fb.png" height="100" width=auto style='position: absolute; left:540px; bottom:80px'/></a>
</div>
<script src="appear.js">
</script>
</body>
</html>
