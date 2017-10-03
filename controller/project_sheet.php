<?php
session_start();
include '../model/project_sheet_post.php';
include '../model/add_task_post.php';

$id_project = $_GET['id'];
$project = project($id_project, $bdd); //launches the function to display de good project sheet

$new_task = display_task($id_project);

if ($id_project && isset($_POST['executed'])) {
	update ($_POST['executed'], $id_project, $_GET['id_task']);
	ob_start();
	header('Location:project_sheet.php?id=' . $id_project); 
	ob_end_flush();
}

else if ($id_project) {
	 include '../vue/header_vue.php';

	include '../vue/project_sheet_vue.php';
	if($new_task){
		require '../vue/new_task_vue.php';
	}
}
else {
	//redirect homepage
}
include '../vue/footer_vue.php';








