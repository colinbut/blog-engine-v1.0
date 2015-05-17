<?php require "dbAuth.php" ?>
<!DOCTYPE html>
<html>
	<?php include "header.php" ?>
	<body>
	<?php include "navigation.php" ?>
	<div id="content">
		<?php
			// Check to see whether the value has been set
			// $_POST array - entryTitle entryText keys
			if( !empty($_POST['searchTerm']) ) {

				// connect to the db
				mysql_connect($hostname, $username, $password);
				
				// select db
				mysql_select_db($database) or show_error();

				$keyword = $_POST['searchTerm'];

				// insert
				// this has SQL Injection implications!
				$sql_query = "SELECT * FROM blog_entries where entryTitle like '%$keyword%' OR entryText like '%$keyword%'; ";
			
				// executes the sql query
				$result = mysql_query($sql_query) or show_error();

				if( mysql_num_rows($result) == 0 ) {
					echo "<p> No results for search term: " . $keyword . " </p>";
				}

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

			} 
			else {
				echo "No search term supplied";
			}

		?>
	</div>
	</body>
</html>