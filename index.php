<?php require "dataAccess/dbManager.php" ?>
<!DOCTYPE html>
<html>
	<?php include "includes/header.php" ?>
	<body>
	<?php include "includes/navigation.php" ?>
	<div id="content">
		<div id="blog_container">			
		<?php 
			$result = get_top_10_blogs();
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
		?>
		</div>
	</div>
	</body>
</html>

