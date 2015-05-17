<?php
	include "dbAuth.php";			
			
	// Check to see whether the value has been set
	// $_POST array - entryTitle entryText keys
	if( !empty($_POST['entryTitle']) && !empty($_POST['entryText']) ) {

		// connect to the db
		mysql_connect($hostname, $username, $password);
					
		// select db
		mysql_select_db($database) or show_error();

		$title = $_POST['entryTitle'];
		$content = $_POST['entryText'];

		// escape quotes
		$title = str_replace("'", "\'", $title);
		$content = str_replace("'", "\'", $content);

		// insert
		// this has SQL Injection implications!
		$sql_query = "INSERT INTO blog_entries (entryTitle, entryText) values ('$title', '$content'); ";
		//echo "$sql_query";

		// executes the sql query
		mysql_query($sql_query) or show_error();

		// redirect to index.php
		header("Location: index.php");

	} 
	else {
		echo "Form not filled in correctly";
	}

?>
