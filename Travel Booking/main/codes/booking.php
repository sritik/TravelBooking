<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$mobile=$_POST["mobile"];
		$destination=$_POST["destination"];
		$people=$_POST["people"];
		$gender=$_POST["gender"];
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "travel";
			
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(!$conn) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		$query="insert into booking(name,mail,mobile,destination,people,gender) values('".$name."','".$email."','".$mobile."','".$destination."','".$people."','".$gender."')";
		
		mysqli_query($conn,$query);	
		
		$affected=mysqli_affected_rows($conn);
			
			if($affected>0)
			{
				echo"<script>alert(\"Booked Successfully\");</script>";
			}
			else
			{
				echo "something went wrong pls try again later";
			}	
	}	
?>
 