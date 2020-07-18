<?php
	$conn=mysqli_connect('localhost','root','','project');
	echo("database connected");

		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$usn=$_POST['usn'];
		$number=$_POST['number'];
		$email=mysqli_real_escape_string($conn,$_POST['mail']);
		$psd1=mysqli_real_escape_string($conn,$_POST['pwd1']);
		$psd2=mysqli_real_escape_string($conn,$_POST['pwd2']);
		
		
		$sql="INSERT INTO signup(username,usn,number,mail,pwd1,pwd2)VALUES('$username','$usn',$number,'$email','$psd1','$psd2')";
		mysqli_query($conn,$sql);
		echo("record inserted");
	

?>