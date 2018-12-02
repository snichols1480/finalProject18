<?php

function searchCharacters($term, $database) {
	// Get list of books
	$term = $term . '%';
	$sql = file_get_contents('sql/getCharacters.sql');
	$params = array(
		'term' => $term
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$Characters = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $Characters;
}

/*
- Create a function named get() that:
	- takes a parameter holding a $_GET key as a string
	- if the GET variable isset, return the GET variable
	- else return an empty string
*/

function get($key) {
	if(isset($_GET[$key])) {
		return $_GET[$key];
	}
	
	else {
		return '';
	}
}

// Get a list of books from the database with the isbn passed in the URL
function printGuestbook() {
	$sql = file_get_contents('sql/getGuests.sql');
	$params();
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$guests = $statement->fetchAll(PDO::FETCH_ASSOC);
}