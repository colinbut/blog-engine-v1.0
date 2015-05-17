<?php
	include "dbManager.php";			
			
	// Check to see whether the value has been set
	// $_POST array - entryTitle entryText keys
	if( !empty($_POST['entryTitle']) && !empty($_POST['entryText']) ) {

		$title = $_POST['entryTitle'];
		$content = $_POST['entryText'];

		// escape quotes
		$title = str_replace("'", "\'", $title);
		$content = str_replace("'", "\'", $content);

		add_new_blog_entry($title, $content);

		// redirect to index.php
		header("Location: index.php");

	} 
	else {
		echo "Form not filled in correctly";
	}

?>
