<?php
	$con = mysql_connect("localhost","root","");

	if (!$con) {
		die('Could not connect: '. mysql_error());
	}

	if (mysql_query("CREATE DATABASE TODOLIST",$con)) {
		echo '<script language="javascript">';
		echo "Database has been created.";
		echo '</script>';
		mysql_select_db("TODOLIST", $con);
	}
	else {
		echo '<script language="javascript">';
		echo 'console.log("Database exists already")';
		echo '</script>';
		mysql_select_db("TODOLIST", $con);
	}


	$sqlToDo = "CREATE TABLE TODO
	(
		ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		Description VARCHAR(255) NOT NULL,
		Status BOOLEAN NOT NULL DEFAULT 0,
		DueDate DATE DEFAULT NULL
	)";
	
	if (mysql_query($sqlToDo,$con)) {
		echo 'Table TODO created successfully!';
	}
	else {
		echo 'Error creating table: '. mysql_error($con);
	};
	
	mysql_close($con);
?>


