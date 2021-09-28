<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$message=$_POST["message"];
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "travel";
			
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(!$conn) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		$query="insert into contactus(name,mail,message) values('".$name."','".$email."','".$message."')";
		
		mysqli_query($conn,$query);	
		
		$affected=mysqli_affected_rows($conn);
			
			if($affected>0)
			{
				echo "Record inserted";
			}
			else
			{
				echo "something went wrong pls try again later";
			}	
	}	
?>
