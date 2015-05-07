
<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<form method="POST" action="search.php">
			<table>
				<tr>
					<td><input type="text" name="searchTerm" size="20"/></td>
					<td><input type="submit" value="Search"/></td>
				</tr>
			</table>
		</form>
		<a href="index.php">Home</a>
	</body>
</html>


<?php

	// Check to see whether the value has been set
	// $_POST array - entryTitle entryText keys
	if( !empty($_POST['searchTerm']) ) {

		// connect to the db
		mysql_connect("localhost", "root", "");
		
		// select db
		mysql_select_db("blog") or die(mysql_error());

		$keyword = $_POST['searchTerm'];

		// insert
		// this has SQL Injection implications!
		$sql_query = "SELECT * FROM blog_entries where entryTitle like '%$keyword%' OR entryText like '%$keyword%'; ";
		echo "$sql_query";

		// executes the sql query
		$result = mysql_query($sql_query) or die(mysql_error());

		echo "<table>";

		// loop through result set and print them out
		while ($row = mysql_fetch_array($result)) {
			echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
		}		

		echo "</table>";

	} 
	else {
		echo "No search term supplied";
		echo "<a href='addEntry.html'>Add</a>";
	}

?>