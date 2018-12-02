<?php
// Create and include a configuration file with the database connection
include('config.php');
include('functions.php');
// get our form variables
// Get a list of guests from the database 
$sql = file_get_contents('sql/getGuests.sql');
$params= array();
$statement = $database->prepare($sql);
$statement->execute($params);
$guests = $statement->fetchAll(PDO::FETCH_ASSOC);

//$guest = $guests[0];

	
	
	?>

	<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Book</title>
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


		<strong>Guests:</strong>

			<p>
				<ul>
				<?php foreach($guests as $guest) : ?>
				<?php echo $guest['firstName']  ?>  <?php echo $guest['lastName'] ?>,<br />
				<?php endforeach; ?>
				</ul>
			</p>
			<a href="index.php">HOME<br />
	
	</div>
</body>
</html>