<?php require "dbManager.php" ?>
<!DOCTYPE html>
<html>
	<?php include "header.php" ?>
	<body>
	<?php include "navigation.php" ?>
	<div id="content">
		<div id="blog_container">
			<?php
				// Check to see whether the value has been set
				// $_POST array - entryTitle entryText keys
				if( !empty($_POST['searchTerm']) ) {

					$keyword = $_POST['searchTerm'];

					$result = search_for_blog($keyword);

					if( mysql_num_rows($result) == 0 ) {
						echo "<p> No results for search term: " . $keyword . " </p>";
					}

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
	
				} 
				else {
					echo "No search term supplied";
				}
			?>
		</div>
	</div>
	</body>
</html>