<?php require "dbAuth.php" ?>
<!DOCTYPE html>
<html>
	<?php include "header.php" ?>
	<body>
	<?php include "navigation.php" ?>
	<div id="content">
		<?php

			// connect to the db
			mysql_connect($hostname, $username, $password);
				
			// select db
			mysql_select_db($database) or show_error();

			// insert
			// this has SQL Injection implications!
			$sql_query = "SELECT * FROM blog_entries ORDER BY entrydate DESC LIMIT 10";

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