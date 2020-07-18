<?php
session_start();
$conn=mysqli_connect("localhost","root","","project");


if(isset($_REQUEST['submit']))
{
	$user=$_REQUEST['username'];
	$password=$_REQUEST['pwd1'];
	$sql="select * from signup where username='$user' && pwd1='$password'";
	$query=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($query);
	if($rowcount==true)
	{
		header('Location:homepage.html');
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "alert('your username and password doesnt match')";
		echo "</script>";
	}
}

?>
<html>
<head>
<style type="text/css">
a:link{font-weight:bold;color:white;font-family:'Comic Sans MS';text-decoration:none;}
a:visited{color:white;}

a:hover{color:red;}

image1{margin-left:20px;margin-right:20px;}

*{box-sizing: border-box;}

.login{
    position: absolute;
	top:180px;
    left: 500px;
    margin:20px;
    max-width: 400px;
    padding: 16px;
	z-index:2;
    background-color:#fffaf0;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus 
{
    background-color: #ddd;
}
.btn 
{
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border:none;
	width:40%;
	position:relative;
	left:100px;
	margin:10px;
	font-size:24px
	opacity: 0.9;
}	

</style>
</head>

<body>	
		
		<!--headers--><!--background color-->
		<p style="background-color:teal;position:absolute;width:1535px;height:109%;
		top:-15px;left:0px;opacity:0.45;z-index:1">	
		
			<a href="homepage.html" style="position:absolute;right:700px;top:20px;">HOME</a>
			<a href="adminlogin.html" style="position:absolute;right:590px;top:20px;">ADMIN</a>
			<a href="https://bmscealumni.net/updates"  style="position:absolute;right:490px;top:20px;">ALUMNI</a>
			<a href="http://bmsce.in/placement-center" 
			style="position:absolute;right:340px;top:20px;">CONTACT US</a>
			<a href="" style="position:absolute;right:230px;top:20px;">LOGOUT</a>
			
		</p>		
		
		<!--for logo-->
		
		<img src="bmslogo.png" width="20%" style="float:left;position:absolute;top:40px;
		left:10px;z-index:1;">
		
		<!--headings-->
		<label style="color:white;font-family:'Comic Sans MS';font-size:26px;
		position:absolute;top:70px;left:210px;z-index:1;">
			<b>Internship and Placement office</b>
		</label>
		<label style="color:white;font-family:'Comic Sans MS';font-size:16px;
		position:absolute;top:115px;left:250px;z-index:1;">
			<b>BMS COLLEGE OF ENGINEERING</b>
		</label>
		
		<p>
		
		<!--background image-->
		
		<img id="image1"src="bmsce.jpg" width="1535px" height="110%" style="opacity:0.9;
		position:absolute;top:0px;left:0px;z-index:0">
		
		</p>
		
		<div>

				  <form action="" method="post" class="login">
					<h1 style="text-align:center">Login</h1>

					<label><b>Username</b></label>
					<input type="text" placeholder="Enter your name" name="username">

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="pwd1">

					<button type="submit" class="btn" name="submit" style="font-family:'Comic Sans MS';font-size:20px;">Login</button><br/>
					<label style="color:red;">Don't have an account? create one now</label>
					<button type="submit" class="btn" style="font-size:20px;"><a href="SIGNUP.html">Signup</a></button>
				  </form>
		</div>
</body>
</html>		