<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('connection.php');
require_once('login-locked.php');

if (!empty($_SESSION['user_type']))
{
	// If the user_type session is not "ref", then the user can't see this page
	if($_SESSION['user_type'] != "ref") {
		header("Location: index.php");
		echo "You must be a ref to see that page.";
	}
	

} else {

}

?>