<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="CSS/style1.css">
</head>

<body>
     <?php

        //include 'header.php';
        

     ?>


	
   <div class="signup-section">

	    <div class="signup-box"> 
	        <h1>Register Now</h1>    

	    <form action="signup.ex.php" method="POST">
		
			<label for="firstname">First Name</label>
			<br>
			
			<input type="text" name="fname" >
			<br>
			
			<label for="lname">Last Name</label>
			<br>
			
			<input type="text" name="lname" >
			<br>
			
			<label for="username">Username</label>
			<br>
			
			<input type="text" name="username" >
			<br>
			
			<label for="email">Email</label>
			<br>
			
			<input type="email" name="email" >
			<br>
			
			<label for="password">Password</label>
			<br>
			
			<input type="password" name="password" >
			<br>
			
			<label for="cpassword">Confirm Password</label>
			<br>
			
			<input type="password" name="cpassword" >
			<br>
			
			<input type="submit" name="reg-submit" value="Register">
			
			<p>Alreadt an user? <a href="login.php">Login</a></p>
		

	     </form>
	   </div> 

	  <?php
   
     if (isset($_GET["error"])) 
     {
     	if ($_GET["error"]=="emptyinput") 
     	{
     		echo "<p>Fill up all the fields!</p>";
     	}
     	elseif ($_GET["error"]=="invalidemailaddress") 
     	{
     		//echo "Invalid email!";
     		echo "<p>Invalid email!</p>";
     	}
     	elseif ($_GET["error"]=="invalidusername") 
     	{
     		//echo "Invalid username!";
     		echo "<p >Invalid username!</p>";
     	}
     	elseif ($_GET["error"]=="passwordnotmatched") 
     	{
     		//echo "Password not matched!";
     		echo "<p >Password not matched!</p>";
     	}
     	elseif ($_GET["error"]=="statementfailed") 
     	{
     		echo "<p>Something went wrong, Try again!</p>";
     	}
     	elseif ($_GET["error"] =="usernamealreadyexit") 
     	{
     		//echo "Username or Email already exist!";
     		echo "<p >Username or Email already exist!</p>";
     	}
     	elseif ($_GET["error"]=="none") 
     	{
     		//echo "You have already logged in!";
     		echo "<p >You have already logged in!</p>";
     	}
     }
            
?>

	 </div>


	



</body>
</html>