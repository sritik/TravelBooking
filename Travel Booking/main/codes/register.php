<?php

    require("connection.php");

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];

        $query="insert into register(username,email,password) values('".$name."','".$email."','".$password."')";

        mysqli_query($conn,$query);
        
        $affected=mysqli_affected_rows($conn);
        if($affected>0)
            {
                
                header('location:index.html');
                echo"<script>alert(\"Registered successfully\");</script>";
                
            }
            else
            {
                echo"<script>alert(\"Invalid Registeration\");</script>";
            }
        
        mysqli_close($conn);
    }
?>