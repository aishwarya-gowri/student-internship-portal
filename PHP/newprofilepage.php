<?php
session_start();
$conn=mysqli_connect('localhost','kusumacse','Webprog123','kusumacse');
if($_SESSION["username"]==true)
{
	echo "<script type='text/javascript'>";
	echo "alert('welcome')";
	echo "</script>";
}
else
{
	header('Location:loginpage.php');
}

	$user=$_SESSION["username"];
	$query="select * signup where username='$user'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	print_r($row);
	
	
	if(isset($_REQUEST['submit']))
	{
		$sem=$_REQUEST['sem'];
		$comp_name=$_REQUEST['comp_name'];
		$stipend=$_REQUEST['stipend'];
		$duration=$_REQUEST['duration'];
		$sql="INSERT INTO intern_details(semester,comp_name,stipend,duration)VALUES('$sem','$comp_name','$stipend','$duration')";
		mysqli_query($conn,$sql); 
	}
?> */
<html>
<head>
<style>

a:link{font-weight:bold;color:white;font-family:'Comic Sans MS';text-decoration:none;}

a:visited{color:white;}

a:hover{color:red;}

*{font-family:'Verdana';}

#header
{
	background-color:#EC7063;
	position:absolute;
	width:1090px;
	height:60px;
	top:-18px;
	left:0px;
	opacity:0.6;
	z-index:1;
	margin-left:350px;
}
#info
{
	background-color:#FEF5E7;
	position:relative;
	top:-8px;
	left:-8px;
	width:350px;
	height:735px;
}	
p.h1
{
	font-family:'Verdana';
	font-size:24px;
	position:relative;
	left:90px
}	

		input[type="text"]
	{
	border:none;
	}
		#t1,#t2,#t3,#t4,#t5
			{
                background-color:#FEF5E7;
                color:black;
				padding: 15px;
				margin: 6px 15px;
				border:none;
			}	
		
		label
		{
			position:relative;
			left:15px;
			font-size:18px;
		}
		
		#right
		{
			background-color:#FEF5E7;
			font-size:18px;
			position:absolute;
			top:58px;
			right:-80px;
		}

		#table1
		{
			
			position:absolute;
			top:230px;left:410px;
			
		}
		table input
		{
			height:30px;
			width:150px;
			border:none;
			text-align:center;
		}

</style>

</head>

<body>

<!--headers-->

<p id="header">
			
			<a href="homepage.html" style="position:absolute;right:450px;top:20px;">HOME</a>
			<a href="http://bmsce.in/placement-center" style="position:absolute;right:350px;top:20px;">ALUMNI</a>			
			<a href="http://bmsce.in/placement-center" style="position:absolute;right:200px;top:20px;">CONTACT US</a>
			<a href="afterlogout.html" style="position:absolute;right:90px;top:20px;">LOGOUT</a>
</p>

<!--user info to the left-->

<div id="info">

		<br/><br/><br/><br/>

		<img class="avatarimage" src="avatar.png" style="width:40%;position:relative;top:10px;left:100px"/>			

		<br/>

		<p class="h1">USER PROFILE</p>

		<form action="" class="myform">
				
				<br/>
				
				<label><b>Name</b></label>
				<input type="text" id="t1" size="20" placeholder="Enter your name"
				style="position:relative;width:50%;left:45px;"><br/>
							
				<label><b>USN</b></label>
				<input type="text" id="t2" size="20" placeholder="Enter your usn"
				style="position:relative;width:50%;left:60px;"><br/>
							
				<label><b>Phone no</b></label>
				<input type="text" id="t3" placeholder="Enter your contact no"
				style="position:relative;width:50%;left:7px;"><br/>
							
				<label><b>Email-id</b></label>
				<input type="text" id="t4" placeholder="Enter valid email-id"
				style="position:relative;width:50%;left:18px;"><br/>
							
				<label><b>Year</b></label>
				<input type="text" id="t5" placeholder="Enter your year"
				style="position:relative;width:50%;left:55px;"><br/>
							
		</form>
</div>

<!--right info-->

<div id="right">

<br/>

<p style="position:relative;left:15px;">COMPANIES OFFERING INTERSHIPS</p>

<ol style="position:relative;top:20px;height:578px;">
	<li>	McKinsey Digital Labs</li>
	<li>	National Instruments </li>
	<li>	Nutanix India Pvt Ltd </li>
	<li>	Walmart Labs</li>
	<li>	L&T Technology Services</li>
	<li>	Endurance International group</li>
	<li>	Sabre Travel Technologies</li>
	<li>	Magnitude Software</li>
	<li>	CISCO</li>
	<li>	Amazon</li>
	<li>	Flipkart</li>
	<li>	Endurance</li>
	<li>	McAfee</li>
	<li>	Sahaj Software Solutions</li>
	<li>	Accenture</li>
	<li>	Amadeus Software Labs</li>
	<li>	Ola</li>
	<li>	Rakuten </li>
	<li>	E2OPEN</li>
	<li>	Zebra Technologies </li>
	<li>	Informatica</li>
	<li>	Perfios Software Solutions Pvt. Ltd.</li>
	<li>	Deloitte</li>
	<li>	Unisys</li>
	<li>	Datagres Technologies</li>
</ol>

</div>

<div>	
	
	<span style="position:absolute;top:150px;left:450px;font-size:20px;">
		Please fill-in the details in the below table
	</span>
	
	<form method="post">
	<table id="table1" border="2" cellspacing="0" cellpadding="2px">

	    <tr>
		
			<th colspan="5" height="50px"><b>INTERNSHIP DETAILS<b></th>
		
		</tr>
        
		<tr>
			
			<th height="30px">SEMESTER</th>
			<th height="30px">COMPANY NAME</th>
			<th height="30px">STIPEND</th>
			<th height="30px">DURATION</th>
			
        </tr>
		
		<tr id="row1">
			
			<td>
				<input type="text" name="sem"/>
			</td>
			<td>
				<input type="text" name="comp_name"/>
			</td>
			<td>
				<input type="text"name="stipend"/>
			</td>
			<td>
				<input type="text" name="duration"/>
			</td>		
		</tr>
		<tr>
		<td colspan="5">
		<input type="submit" name="submit" style="position:relative;left:240px;"></td>
		</tr>
	</table>
	</form>
</div>	
</body>
</html>