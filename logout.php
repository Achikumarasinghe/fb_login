<?php
	//logout handle 
	session_start();
	//uset all the session variables and delete dession
	session_unset();
	session_destroy();
	unset($_COOKIE['session_cookie']);
	setcookie('session_cookie', '', time() - 3600, '/');
	setcookie('PHPSESSID', '', time() - 3600, '/');
	
    //redirect to the home page
	header("Location:index.php");
   	exit;
