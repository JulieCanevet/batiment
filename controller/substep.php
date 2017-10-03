<?php
session_start();
include '../vue/header_vue.php';
include '../model/substep_post.php';
include '../model/project_sheet_post.php';

if(isset($_GET['id'])){ // if a project is selected
	$id_project = $_GET['id'];
}

if (isset($_GET['click'])){ // if a task is set
	$id_task = $_GET['click'];
}

	if(!empty($_POST['title']) && !empty($_POST['substep_description'])){
		$new = add_substep($_POST['title'], $_POST['substep_description'], $id_task, 'false'); // create a substep
	}		
	$new_substep = display_substep($id_task); // if substep exists, display it
	include '../vue/new_task_vue.php';
	include '../vue/substep_vue.php';
	include '../vue/footer_vue.php';
