<?php

// Create and include a configuration file with the database connection
include('config.php');

// Include functions for application
include('functions.php');

// If form submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get username and password from the form as variables
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// Query records that have usernames and passwords that match those in the fpcustomers table
	$sql = file_get_contents('sql/guestLogin.sql');
	$params = array(
		'username' => $username,
		'password' => $password
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$users = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	// If $users is not empty
	if(!empty($users)) {
		// Set $user equal to the first result of $users
		$user = $users[0];
		
		// Set a session variable with a key of customerID equal to the customerID returned
		$_SESSION['guestID'] = $user['guestID'];
		
				
		// Redirect to the index.php file
		//header('location: logout.php');
	}
	else {
		$err_message = 'Username or password is incorrect!';
	}
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Login</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
	
						
		<h1>Guestbook</h1>
		
		<?php if (isset($err_message) && !empty($err_message)):?>
			<span style='color: red; font-weight: bold'>
				<?php echo $err_message; ?>
			</span>
		<?php endif;?>
		
		<form method="POST">
			<label>Username</label>&nbsp;<input type='text' name='username'><br>
			<label>Password</label>&nbsp;<input type='password' name='password'><br><br>
			<a href='guest.php'>
				<input type="button" value="Register" />
			</a>&nbsp;
			<input type="submit" value="Log In" />
		</form>
		<a href="index.php">HOME<br />
	
	</div>
</body>
</html>