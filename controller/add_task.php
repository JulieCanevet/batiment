<?php
session_start();
include '../vue/header_vue.php';

include '../model/add_task_post.php';

if (isset($_GET['click'])){
	$id_project = $_GET['click'];

	include '../vue/add_task_vue.php';
}

	if(!empty($_POST['task_name'])){				
		$new = add_task($_POST['task_name'], $id_project, 'false');
	}		
		$new_task = create_task($id_project);

		include '../vue/new_task_vue.php';
