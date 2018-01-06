<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO LIST</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css"/>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>TO DO LIST</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_task_modal">Add New Task</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Tasks:</h3>

            <div class="records_content"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_new_task_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Task</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="task_description">Description</label>
                    <input type="text" id="task_description" placeholder="Description" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="goal_date">Goal Date</label>
                    <input type="date" id="goal_date" class="form-control"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addTask()">Add Task</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="update_task_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">			
                <div class="form-group">
                    <label for="update_status">Done</label>
                    <input type="checkbox" id="update_status" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="update_description">Description</label>
                    <input type="text" id="update_description" placeholder="Description" class="form-control"/>
                </div>				
                <div class="form-group">
                    <label for="update_goal_date">Goal Date</label>
                    <input type="date" id="update_goal_date" class="form-control" value="1"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateTask()" >Save Changes</button>
                <input type="hidden" id="hidden_task_id">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
