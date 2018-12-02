<?php

// Create and include a configuration file with the database connection
include('config.php');
include('functions.php');

// Get type of form either add or edit from the URL (ex. form.php?action=add) using the newly written get function
$action = get('action');
$guest = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fname = $_POST['guestFname'];
	$lname = $_POST['guestLname'];
	$phone = $_POST['guestPhone'];
	$email = $_POST['guestEmail'];
	$uname = $_POST['guestUname'];
	$upass = $_POST['guestPass'];
	
	if($action == 'add') {
		// Insert Guest
		$sql = file_get_contents('sql/insertGuest.sql');
		$params = array(
			'firstName' => $fname,
			'lastName' => $lname,
			'phone' => $phone,
			'email' => $email,
			'userName' => $uname,
			'userPassword' => $upass
			);
		
		$statement = $database->prepare($sql);
		$statement->execute($params);
	}
	
	elseif ($action == 'edit') {
		// Update Customer
		$sql = file_get_contents('sql/updateGuest.sql');
		$params = array(
			'firstName' => $fname,
			'lastName' => $lname,
			'phone' => $phone,
			'email' => $email,
			'userName' => $uname,
			'userPassword' => $upass
		);
		
		$statement = $database->prepare($sql);
		$statement->execute($params);
	}
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Guests</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
		<h1>Guestbook:</h1>
		<form action="" method="POST">
			
			<div class="form-element">
				<label>First Name:</label>
				<input type="text" step="any" name="guestFname" class="textbox" />
			</div>
			
			<div class="form-element">
				<label>Last Name:</label> 
				<input type="text" step="any" name="guestLname" class="textbox" />
			</div>
			
			<div class="form-element">
				<label>Phone:</label> 
				<input type="number" step="any" name="guestPhone" class="textbox2" /> 
			</div>
			
			
			<div class="form-element">
				<label>Email:</label> 
				<input type="text" step="any" name="guestEmail" class="textbox" /> 
			</div>
			
			<div class="form-element">
				<label>User Name:</label> 
				<input type="text" step="any" name="guestUname" class="textbox" /> 
			</div>
			
			<div class="form-element">
				<label>Password:</label> 
				<input type="password" step="any" name="guestPass" class="textbox2" />
			</div>
			
			<div class="form-element">
				
				<input type="submit" class="button" value = "Register" />&nbsp;
				<a href="login.php">
					<input type="button" class="button" value="Login" />
				</a>
				
				<a href="index.php">
					<input type="button" class="button" value="Home" />
				</a>
			</div>
		</form>
	</div>
</body>
<html>