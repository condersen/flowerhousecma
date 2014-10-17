<?php
	require_once 'constants.php';
	//we connect to the MySQL database using the host name, the user and the password:
	$db_link = mysql_connect (DB_HOST, DB_USER, DB_PASS);
	if (!$db_link) {//incase of error, mysql_connect() returns FALSE; !$something($something negated) means that the $something is not TRUE
		die("Could not connect to the database: ".mysql_error());//mysql_error() returns the error message from the previous operation
	}
	
	//then, we select the database:
	$db_selected = mysql_select_db(DB_NAME, $db_link);//similarly to mysql_connect(),
	if(!$db_selected) {
		die ("cannot use database: ".mysql_error());
	}
	
//	echo ($db_link);
//	echo ($db_selected);
?>