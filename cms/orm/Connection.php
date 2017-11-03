<?php
	$mysql_server = "comberweb.com.br";
    $mysql_user = "comberwe_root";
    $mysql_password = "comberweb2017";
    $mysql_db = "comberwe_brazilio";

	$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	$mysqli->set_charset("utf8");
?>