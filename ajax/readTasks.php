<?php
	include("db_connection.php");
	
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>Done</th>
							<th>No.</th>
							<th>Description</th>
							<th>Goal Date</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM TODO";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    if(mysql_num_rows($result) > 0) {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result)) {
		
			$checked = '';
			if($row['Status'] == 1) {
				$checked = 'checked';
			}
			
    		$data .= '<tr>		
				<td><input type="checkbox" id="status" class="form-control" disabled value='.$row['Status'].' '.$checked.'/></td>
				<td>'.$number.'</td>
				<td>'.$row['Description'].'</td>
				<td>'.$row['DueDate'].'</td>
				<td><button onclick="GetTask('.$row['ID'].')" class="btn btn-warning">Update</button></td>
				<td><button onclick="DeleteTask('.$row['ID'].')" class="btn btn-danger">Delete</button></td>
    		</tr>';				
    		$number++;
    	}
    }
    else {
    	$data .= '<tr><td colspan="6">No tasks found!</td></tr>';
    }
	
    $data .= '</table>';
    echo $data;
?>