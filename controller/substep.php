<?php
session_start();
include '../vue/header_vue.php';

include '../model/substep_post.php';

if (isset($_GET['click'])){
	$id_task = $_GET['click'];
	include '../vue/substep_vue.php';
}

	if(!empty($_POST['title']) && !empty($_POST['substep_description'])){				

		$new = add_substep($_POST['title'], $_POST['substep_description'], $id_task, 'false');
	}		
		$new_substep = create_substep($id_task);
		include '../vue/new_task_vue.php';
