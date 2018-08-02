<?php
	
	require 'dbconfig/config.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<div style="background-color:#7bceeb;">

	
<body style="background-color:black" >
<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <td valign="top" align="left" background="img/d.jpeg" style="background-repeat:no-repeat; background-size:cover;height:650px;"> 

	<div>
	
		<center>
			<h1 style="color:white;"><b>LOGIN FORM</b></h1>
			
		
		</center>


	
	
	<form class="loginform" action="index.php" method="post">
	<label><h3 style="color:white;"><b>Username:</b></h3></label>
	<input name="username" type="text" class="inputvalues" placeholder="type ur username" required/><br>
	<br><label><h3 style="color:white;"><b>Password:</b></h3></label>
	<input name="password" type="password" class="inputvalues" placeholder="type ur password" required/>
	<br>
	<input name="login" type="submit" id="login-btn" value="Login"/><br>
	<a href="register.php"><input type="button" id="register-btn" value="Register"/></a>
	
	</form>
	
	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$query="select * from user where username='$username' and password='$password'";
			$query_run=mysqli_query($con, $query);
			if(mysqli_num_rows($query_run)>0)
				{
					$_SESSION['username']=$username;
					header('location:home.php');
				}
				else
				{
					echo '<script type="text/javascript"> alert("Invalid credentials..") </script>';
				}
		}
	?>
	</div>
	



</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


</html>