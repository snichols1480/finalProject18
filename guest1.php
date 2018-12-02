<?php

// Create and include a configuration file with the database connection
include('config.php');

// Include functions for application


// Get type of form either add or edit from the URL (ex. form.php?action=add) using the newly written get function
$action = get('action');

// Get the customer ID from the URL if it exists using the newly written get function
$fpguestID = get('fpguestsID');

// Initially set $customer to null;
$guest = null;

// If customer ID is not empty, get customer record into $customer variable
if(!empty($guestsID)) {
	$sql = file_get_contents('sql/getGuests.sql');
	$params = array(
		'guestsID' => $guestsID
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$customers = $statement->fetchAll(PDO::FETCH_ASSOC);

	// Set $customer equal to the first customer in $customers
	$guest = $guests[0];
}

// If form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fname = $_POST['guestFName'];
	$lname = $_POST['guestLName'];
	$phone = $_POST['guestPhone'];
	$email = $_POST['guestEmail'];
	$uname = $_POST['guestUname'];
	$u_pass = $_POST['guestPass'];
	
	
	if($action == 'add') {
		// Insert Customer
		$sql = file_get_contents('sql/insertGuest.sql');
		$params = array(
			'fpguestFName' => $fname,
			'fpguestLName' => $lname,
			'fpguestPhone' => $phone,
			'fpguestEmail' => $email,
			'fpguestUName' => $u_name,
			'fpguestPassword' => $u_pass
		);
	
		$statement = $database->prepare($sql);
		$statement->execute($params);
	}
	
	elseif ($action == 'edit') {
		// Update Customer
		$sql = file_get_contents('sql/updateGuests.sql');
		$params = array(
			'fpguestFName' => $fname,
			'fpguestLName' => $lname,
			'fpguestPhone' => $phone,
			'fpguestEmail' => $email,
			'fpguestUName' => $u_name,
			'fpguestPassword' => $u_pass
		);
		
		$statement = $database->prepare($sql);
		$statement->execute($params);
	}
	
	// Redirect to book listing page
	//header('location: index.php');
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
		<h1>Guest:</h1>
		<form action="" method="POST">
			
			<div class="form-element">
				<label>First Name:</label> <input type="text" step="any" name="guestFname" class="textbox"  value="<?php echo $guest['fname'] ?>" />
			</div>
			
			<div class="form-element">
				<label>Last Name:</label> <input type="text" step="any" name="guestLname" class="textbox" value="<?php echo $guest['lname'] ?>" />
			</div>
			
			<div class="form-element">
				<label>Phone:</label> <input type="number" step="any" name="guestPhone" class="textbox2" value="<?php echo $guest['phone'] ?>" /> 
			</div>
			
			<div class="form-element">
				<label>Email:</label> <input type="text" step="any" name="guestEmail" class="textbox" value="<?php echo $guest['email'] ?>" /> 
			</div>
			
			<div class="form-element">
				<label>User Name:</label> <input type="text" step="any" name="guestUname" class="textbox" value="<?php echo $guest['email'] ?>" /> 
			</div>
			
			<div class="form-element">
				<label>Password:</label> <input type="text" step="any" name="guestPass" class="textbox2"  value="<?php echo $guest['u_pass'] ?>" />
			</div>
			
			<div class="form-element">
				
				<input type="submit" class="button" value = "Register" />&nbsp;
				<input type="reset" class="button" /> &nbsp;
			</div>
		</form>
	</div>
</body>
<html>