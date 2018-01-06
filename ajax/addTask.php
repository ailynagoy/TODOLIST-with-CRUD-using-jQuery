<?php
	if(isset($_POST['task_description']) && isset($_POST['goal_date']))
	{
		include("db_connection.php");

		$task_description = $_POST['task_description'];
		$goal_date = $_POST['goal_date'];
		$query = "INSERT INTO TODO(Description, DueDate) VALUES('$task_description', IF('$goal_date' = '', NULL, '$goal_date'))";
		
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	}
?>