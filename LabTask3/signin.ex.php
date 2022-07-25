<?php
    
     if (isset($_POST["login-submit"])) 
     {
     	$username = $_POST["username"];
     	$password = $_POST["password"];



     	require_once 'db.php';
     	require_once 'function.php';



     	if (emptyLogin($username, $password) !== true) 
     	{
     		header("location: login.php?error=emptylogininput");
     		exit();
     	}

     	loginUser($conn, $username, $password);

}

else
{
     header("location: login.php");
     exit();
}



?>