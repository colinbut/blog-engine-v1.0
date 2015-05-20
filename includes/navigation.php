<div id="side-nav-bar">
	<!-- search form -->
	<form method="POST" action="search.php">
		<table>
			<tr>
				<td><input type="text" class="searchBox" name="searchTerm" size="20" value="search" /></td>
				<td><input type="submit" value="Search"/></td>
			</tr>
		</table>
	</form>
	<h1><a href="index.php">Blog Engine v1.0</a></h1>
	<a href="login/login.php">new post</a>
	<br />
	<br />
	<a href="viewAll.php">list posts</a>
	<br />
	<br />
	<a href="about.php">about</a>
	<?php include "footer.php" ?>
</div>