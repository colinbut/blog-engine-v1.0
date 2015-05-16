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
			$sql_query = "SELECT * FROM blog_entries";
			//echo "$sql_query";

			// executes the sql query
			$result = mysql_query($sql_query) or die(mysql_error());

			echo "<table>";

			// loop through result set and print them out
			while ($row = mysql_fetch_array($result)) {
				echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
			}		

			echo "</table>";


		?>
	</div>
	</body>
</html>