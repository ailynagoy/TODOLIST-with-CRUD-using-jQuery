<?php
	if(isset($_POST['id']) && isset($_POST['id']) != "") {
		include("db_connection.php");

		$id = $_POST['id'];
		$query = "DELETE FROM TODO WHERE ID = '$id'";
		
		if (!$result = mysql_query($query)) {
			exit(mysql_error());
		}
	}
?>