<div id="side-nav-bar">
	<!-- search form -->
	<form id="searchArea" method="POST" action="search.php">
		<table id="search-table">
			<tr>
				<td class="search-row"><input type="text" class="searchBox" name="searchTerm" placeholder="search" /></td>
				<td class="search-row"><input type="submit" class="searchButton" value="Search" /></td>
			</tr>
		</table>
	</form>
	<h1 id="header-title"><a href="index.php">Blog Engine v1.0</a></h1>
	<a class="link" href="newPost.php">new post</a>
	<br />
	<br />
	<a class="link" href="viewAll.php">list posts</a>
	<br />
	<br />
	<a class="link" href="about.php">about</a>
    <!-- logout -->
    <div id="logout">
        <form action="login/logout.php" method="POST">
            <input type="submit" class="logoutButton" value="Logout" />
        </form>
    </div>
	<?php include "footer.php" ?>
</div>