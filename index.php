<?php require "dbAuth.php" ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Blog Engine v1.0</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

	<div id="side-nav-bar">
		<input type="text" name="search" value="search" />
		<input type="submit" value="Search"/>
		<h1>Blog Engine v1.0</h1>
		<a href="addEntry.html">new post</a>
		<br />
		<a href="viewAll.php">list posts</a>
		<br />
		<!--<a href="search.php">search</a>
		<br />-->
		<p>&copy; Copyright 2015. All rights Reserved.</p>
	</div>
	<div id="content">
		<?php

			// connect to the db
			mysql_connect($hostname, $username, $password);
				
			// select db
			mysql_select_db($database) or show_error();

			// insert
			// this has SQL Injection implications!
			$sql_query = "SELECT * FROM blog_entries LIMIT 10";

			// executes the sql query
			$result = mysql_query($sql_query) or show_error();

			echo "<div id='blog_container'>";
			// loop through result set and print them out
			$rowCount = 1;
			while ($row = mysql_fetch_array($result)) {
				echo "<div id='blog_entry" . $rowCount . "'>";
				echo "<h1 class='title'>" . $row[1] . "</h1>";
				echo "<div class='date'>" . $row[0] . "</div>";
				echo "<div class='blog'>" . $row[2] . "</div>";
				echo "</div>";
				$rowCount++;
			}		
			echo "</div>";

		?>
	</div>

		
	</body>
</html>