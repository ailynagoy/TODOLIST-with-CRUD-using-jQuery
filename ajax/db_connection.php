<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "TODOLIST";

$db = mysql_connect($host, $user, $password) or die("Could not connect to database");
mysql_select_db($database, $db);

?>