<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="CSS/style2.css">
</head>
<body>
	<?php

        //include 'header.php';
        

     ?>

  

<div class="signin-section">

    <div class="signin-box">

      <h1>Login Here</h1>

        <form action="signin.ex.php" method="POST">
		  

			<label for="username">Username</label>
			<br>
			
			<input type="text" name="username" >
			<br>
			
			<label for="password">Password</label>
			<br>
			
			<input type="password" name="password" >
			<br>
			
			<input type="submit" name="login-submit" value="Login">
			
			<p>Not an user? <a href="signup.php">Signup</a></p>
		

	    </form>

	</div>

	 <?php

      if (isset($_GET["error"])) 
      {
      	if ($_GET["error"]=="emptylogininput") 
      	{
      		//echo "Fill up the fields correctly!";
      		echo "<p style=color:red;text-align:center;>Fill up the fields correctly!</p>";
      	}

      	else if ($_GET["error"]=="wronglogin") 
      	{
      		//echo "Incorrect information!";
      		echo "<p style=color:red;text-align:center;>Incorrect information!</p>";
      	}
      }
      

   ?>

</div>




</body>
</html>