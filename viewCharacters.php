<?php
// Create and include a configuration file with the database connection
include('config.php');
include('functions.php');
// get our form variables
 
$term = get('search-term');

$charactersR = searchCharacters($term, $database);



	
	
	?>

	<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Characters</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body style bgcolor="beige">

	<div class="page">
		<h1>Characters</h1>


		<strong>Characters:</strong>
			<form method="GET">
			<input type="text" name="search-term" placeholder="Search Character..." />
			<input type="submit" />
		</form>
		<p>
			
			<?php if ($charactersR > 0) {
					echo $characters['name'];
			}
					else {
						echo "No results.";
					}
?> 
			
		</p>
			
		<a href="index.php">HOME<br />
	
	</div>
</body>
</html>