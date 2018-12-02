<?php

// Connecting to the MySQL database
$user = 'nicholss3';
$password = 'tRad3ASe';

$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_fall18_nicholss3', $user, $password);
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>