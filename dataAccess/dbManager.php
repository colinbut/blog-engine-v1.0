<?php
	
	require "dbConnect.php";

	function get_top_10_blogs() {

		connect();

		// insert
		// this has SQL Injection implications!
		$sql_query = "SELECT * FROM blog_entries ORDER BY entrydate DESC LIMIT 10";

		// executes the sql query
		$result = mysql_query($sql_query) or show_error();

		return $result;

	}

	function get_all_blogs () {

		connect();

		$sql_query = "SELECT * FROM blog_entries";

		// executes the sql query
		$result = mysql_query($sql_query) or show_error();

		return $result;
	}

	function search_for_blog ($keyword) {

		connect();

		$sql_query = "SELECT * FROM blog_entries where entryTitle like '%$keyword%' OR entryText like '%$keyword%'; ";
				
		// executes the sql query
		$result = mysql_query($sql_query) or show_error();

		return $result;
	}

	function add_new_blog_entry ($title, $content) {

		connect();

		// insert
		// this has SQL Injection implications!
		$sql_query = "INSERT INTO blog_entries (entryTitle, entryText) values ('$title', '$content'); ";

		// executes the sql query
		mysql_query($sql_query) or show_error();

	}

    function getUserCredentials ($user, $pwd) {
        
        connect();
    
        $sql = "SELECT * FROM blog_user WHERE email = '" . $user . "' AND password = '" . $pwd . "';";
        
        $result = mysql_query($sql) or show_error();
    
        return $result;
    }

?>