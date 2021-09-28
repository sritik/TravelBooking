<?php
    require("connection.php");

    session_start();  

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $password1=$_POST["password1"];
        $username1=$_POST["username1"];
        
        $query="select password,username from register where username='".$username1."'";
        
        
        $result=mysqli_query($conn,$query);
		mysqli_close($conn);
        if (mysqli_num_rows($result)!=0)
        {
            $row=mysqli_fetch_assoc($result);
            if($row["password"]==$password1)
            {
                $_SESSION["email"] = $email; 
				$_SESSION["username"] = $row["username1"]; 
                echo"Sucess";

                     header('location:main-index.html');
                
            }
            else
            {
                
                echo"<script>alert(\"Password Invalid\");</script>";
                header('location:index.html');
            }
            
        }
        else
        {
			echo"<script>alert(\"Email Invalid\");</script>";
 
        }
        

       
    }
?>