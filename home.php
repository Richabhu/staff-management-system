<?php
session_start();
	require 'dbconfig/config.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>

<body style="background-color:#95a5a6";/>
	
	<div style="background-color:#7bceeb;">

	<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/c.jpeg" style="background-repeat:no-repeat; background-size:100% 100%;height:700px">
	<div style="height:90px;margin:50px">
	
	<div style="margin-top:40px>
	<div class="row">
	<center>
	<div class= "col-xs-2">
		<a href="home.php"><input style="font-weight:bold" type="button" value="HOME" name="hom" id="button1" class="btn-primary"/></a>
		</div>
		<div class="col-xs-2">
		<a href="employee.php"><input style="font-weight:bold" type="button" value="EMPLOYEE" name="emp" id="btnn" class="btn-primary"/></a>
		</div>
		<div class="col-xs-2">
		<a href="department.php"><input style="font-weight:bold" type="button" value="DEPARTMENT" name="dep" id="btnn" class="btn-primary"/></a>
		</div>
		<div class="col-xs-2">
		<a href="dlocation.php"><input style="font-weight:bold" type="button" value="DLOCATION" name="loc" id="btnn" class="btn-primary"/></a></div>
		<div class="col-xs-2">
		<a href="project.php"><input style="font-weight:bold" type="button" value="PROJECT" name="pro" id="btnn" class="btn-primary"/></a></div>
		<div class="col-xs-2">
		<a href="work.php"><input style="font-weight:bold" type="button" value="WORKS-ON" name="wor" id="btnn" class="btn-primary"/></a></div>
		<div class="col-xs-2"><br>
		<a href="index.php"><input style="font-weight:bold" class="btn btn-danger" type="button" value="LOGOUT" id="btnn"/></a>
		</div>
	</center>
	</div>
	
	</div>
	
	</div>
	
	
	
	<center>
	<h1 style="color:white;"><b>COMPLETE DETAILS</b></h1><br><br>
	<a href="viewssn.php"><input style="font-weight:bold" type="button" value="SSN" name="pro" id="btnn"/></a><br><br><br>
	

	</div>
	
</body>