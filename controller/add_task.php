<?php
session_start();

include '../model/add_task_post.php';

if (isset($_GET['click'])){ // if project selected
	$id_project = $_GET['click'];

	if(!empty($_POST['task_name'])){ // if new task exists			
		$new = add_task($_POST['task_name'], $id_project, 0);
		$new_task = display_task($id_project);
		header('Location:project_sheet.php?id='.$id_project);
	}		
	
	if(isset($new_task)){ // if task already exists
		$new_task['id_project'] = $_GET['click'];
	}
}
include '../vue/add_task_vue.php';
include '../vue/footer_vue.php';
