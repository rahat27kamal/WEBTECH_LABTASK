<?php
  
    $servername = "localhost";
    $usernames = "root";
    $password = "";
    $databasename = "cloudkitchen";


    $conn = mysqli_connect($servername, $usernames, $password, $databasename);


    if (!$conn) 
    {
    	die("Connectuin failed: ".mysqli_connect_error());
    }
    else
    {
    	//echo "success";
    }


?>