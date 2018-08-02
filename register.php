 <?php
  require 'dbconfig/config.php';
?>

<!DOCTYPE HTML>

<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/oo.jpg" style="background-repeat:no-repeat; background-size:100% 100%;height:700px">
	<div>
		<center>
			<h1 style="color:white;"><b>REGISTRATION FORM</b></h1>
		
		</center>


	
	
	<form class="loginform" action="register.php" method="post">
	<label><b>Username:</b></label>
	<input name="username" type="text" class="inputvalues" placeholder="type ur username" required/>
	<br><label><b>Password:</b></label>
	<input name="password" type="password" class="inputvalues" placeholder="type ur password" required/>
	<br><label><b>Confirm Password:</b></label>
	<input name="cpassword" type="password" class="inputvalues" placeholder="type ur password to confirm" required/>
	<br>
	<input name="submit" type="submit" id="login-btn" value="Sign Up"/><br>
	<a href="index.php"><input style="background-color:blue" type="button" id="register-btn"  value="Back to login"/></a>
	</form>
	
	<?php
		if(isset($_POST['submit']))
		{
			//echo '<script type="text/javascript"> alert("sign in button clicked") </script>';
			$username=$_POST['username'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			
			if($password==$cpassword)
			{
				$query="select * from user where username='$username' ";
				
				$query_run=mysqli_query($con, $query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("User already exists .. Try another username") </script>';
				}
				else
				{
					$query="insert into user values('$username','$password')";
					$query_run=mysqli_query($con, $query);
					
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("User got successfully registered..Go to login page to login") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error.. Please try again") </script>';
				}
				
				}
				
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password and confirm password should be same") </script>';
			}
		}
	?>
	</div>
	



</body>
</html>