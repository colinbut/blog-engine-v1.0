<?php 
	require "dbAuth.php"; 

	function connect() {
		
		// connect to the db

		global $hostname;
		global $username;
		global $password;
		global $database;

		mysql_connect($hostname, $username, $password);
				
		// select db
		mysql_select_db($database) or show_error();

		
	}

	
	function show_error() {
		die("Error" . mysql_errno() . ":" . mysql_error());
	}

?>