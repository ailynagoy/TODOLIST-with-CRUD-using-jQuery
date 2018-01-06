function addTask() {
    var task_description = $("#task_description").val();
	var goal_date = $("#goal_date").val();

    $.post("ajax/addTask.php", {
        task_description: task_description,
		goal_date : goal_date,
    }, function (data, status) {
        $("#add_new_task_modal").modal("hide");
		
        readTasks();
		
        $("#task_description").val("");
		$("#goal_date").val("");
    });
}

function UpdateTask() {
    var id = $("#hidden_task_id").val();
    var update_description = $("#update_description").val();
	var update_goal_date = $("#update_goal_date").val();
	var update_status = (document.getElementById("update_status").checked ? 1 : 0);
	
    $.post("ajax/updateTask.php", {
            id: id,
            update_description: update_description,
			update_goal_date : update_goal_date,
			update_status : update_status,
        },
		function (data, status) {
            $("#update_task_modal").modal("hide");
            readTasks();
        }
    );
}

function DeleteTask(id) {
    var conf = confirm("Are you sure, do you really want to delete the task?");
    if (conf == true) {
        $.post("ajax/deleteTask.php", {
                id: id
            },
            function (data, status) {
                readTasks();
            }
        );
    }
}

function GetTask(id) {
    $("#hidden_task_id").val(id);
				
    $.post("ajax/readTask.php", {
            id: id			
        },
        function (data, status) {
            var todo = JSON.parse(data);
            $("#update_description").val(todo.Description);
			$("#update_goal_date").val(todo.DueDate);
			$("#update_status").val(todo.Status);
			document.getElementById("update_status").checked = (todo.Status == 1 ? 1 : 0)
        }
    );
	
    $("#update_task_modal").modal("show");
}

function readTasks() {
    $.get("ajax/readTasks.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}

$(document).ready(function () {
    readTasks();
});