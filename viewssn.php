<?php
session_start();
	require 'dbconfig/config.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>vIEW SSN</title>
	<link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>

<body style="background-color:#95a5a6";>
	
	<div style="background-color:#7bceeb;">
	<div style="background-image:url(img/a.png); background-size:cover; height:650px;">
	<div class="container">
	<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
     <td valign="top" align="left">

	<div style="height:90px;margin:50px">
	
	<div style="margin-top:40px>
	<div class="row">
	<center>
	<div class= "col-xs-2">
		<a href="home.php"><input style="font-weight:bold" type="button" value="HOME" name="hom" id="btnn"/></a>
		</div>
		<div class="col-xs-2">
		<a href="employee.php"><input style="font-weight:bold" type="button" value="EMPLOYEE" name="emp" id="btnn"/></a>
		</div>
		<div class="col-xs-2">
		<a href="department.php"><input style="font-weight:bold" type="button" value="DEPARTMENT" name="dep" id="btnn"/></a>
		</div>
		<div class="col-xs-2">
		<a href="dlocation.php"><input style="font-weight:bold" type="button" value="DLOCATION" name="loc" id="btnn"/></a></div>
		<div class="col-xs-2">
		<a href="project.php"><input style="font-weight:bold" type="button" value="PROJECT" name="pro" id="btnn"/></a></div>
		<div class="col-xs-2">
		<a href="work.php"><input style="font-weight:bold" type="button" value="WORKS-ON" name="wor" id="btnn"/></a></div>
		<div class="col-xs-2"><br>
		<a href="index.php"><input style="font-weight:bold" type="button" value="LOGOUT" id="btnn"/></a>
		</div>
	</center>
	</div>
	
	</div>
	
	</div>
	
	
	
	<center>
	<h2><b>COMPLETE DETAILS BASED ON SSN:</b></h5><br><br><br><br></h2>
	
	<form class="loginform" action="viewssn.php" method="post">
	<label>ENTER SSN:</label>
			<input type="text" name="ssn" class="form-control" placeholder="ENTER SSN" /><br><br>
			<button class="btn btn-success" name="submit" value="submit">SUBMIT</button></form>
	</center>
	
	<table class="table table-responsive" border="2" style="border-color:black; margin-top:20px; background-color:white" >
		<tr>
			<th>slno</th>
			<th>ssn</th>
			<th>name</th>
			<th>dname</th>
			<th>dno</th>
			<th>pno</th>
			<th>pname</th>
			<th>hours</th>
			
		</tr>
<?php
	if(isset($_POST['submit']))
			{
				$ssn=$_POST['ssn'];
				
				$sqll="select e.ssn,e.name,d.dname,d.dno,p.pno,p.pname,w.hours from employee e, department d,project p,workson w where e.ssn='$ssn' and e.ssn=w.ssn and e.dno=d.dno and w.pno=p.pno";
				$res=$con->query($sqll);
				

				$i=1;
				while($row=$res->fetch_assoc())
		{
			$ssn=$row['ssn'];
			$name=$row['name'];
			$dname=$row['dname'];
			$dno=$row['dno'];
			$pno=$row['pno'];
			$pname=$row['pname'];
			$hours=$row['hours'];
			//$xxx=$_POST['xxx'];

			echo '<tr>
			<td>'.$i.'</td>
			<td>'.$ssn.'</td>
			<td>'.$name.'</td>
			<td>'.$dname.'</td>
			<td>'.$dno.'</td>
			<td>'.$pno.'</td>
			<td>'.$pname.'</td>
			<td>'.$hours.'</td>
			</tr>';$i++;
		}
				
			}
?>
	</div>
	</div>
	</div>
	
</body>
