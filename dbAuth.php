<?php
	
	$hostname = "localhost";

	$username = "root";

	$password = "";

	$database = "blog";

	function show_error() {
		die("Error" . mysql_errno() . ":" . mysql_error());
	}
	
?>