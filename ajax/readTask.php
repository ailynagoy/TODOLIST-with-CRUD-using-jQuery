<?php

include("db_connection.php");

if(isset($_POST['id']) && isset($_POST['id']) != "") {
    $id = $_POST['id'];

    $query = "SELECT * FROM todo WHERE ID = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
    $response = array();
    if(mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
	
    echo json_encode($response);
}
else {
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}