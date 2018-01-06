<?php

include("db_connection.php");

if(isset($_POST)) {
    $id = $_POST['id'];
    $update_description = $_POST['update_description'];
    $update_goal_date = $_POST['update_goal_date'];
    $update_status = $_POST['update_status'];	

    $query = "UPDATE todo SET Description = '$update_description', 
							  DueDate = IF('$update_goal_date' = '', NULL, '$update_goal_date'), 
							  Status = '$update_status' 
			  WHERE ID = '$id'";
			  
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}