<?php
	
	echo "<a href='index.php'>Home</a>";

	// connect to the db
	mysql_connect("localhost", "root", "");
		
	// select db
	mysql_select_db("blog") or die(mysql_error());

	// insert
	// this has SQL Injection implications!
	$sql_query = "SELECT * FROM blog_entries LIMIT 10";
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