<?php

// Create and include a configuration file with the database connection
include('Myconfig.php');

// Include functions for application
include('functions.php');

// Destroy the current session
session_destroy();
// Redirect to the index page
header ('location: index.php');