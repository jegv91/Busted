<?php
	$dbhost = 'db.php-mysql-tutorial.com:3306';
	$dbuser = 'root';
	$dbpass = '';

	global $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
	$dbname = 'busted';
	mysql_select_db($dbname);
?>