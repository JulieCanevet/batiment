<?php
session_start();
include '../vue/header_vue.php';
include '../model/substep_post.php';
include '../model/project_sheet_post.php';

if(isset($_GET['id'])){
$id_project = $_GET['id'];
}

if (isset($_GET['click'])){
	$id_task = $_GET['click'];
}

	if(!empty($_POST['title']) && !empty($_POST['substep_description'])){				

		$new = add_substep($_POST['title'], $_POST['substep_description'], $id_task, 'false');
	}		
		$new_substep = create_substep($id_task);
		include '../vue/new_task_vue.php';
	include '../vue/substep_vue.php';