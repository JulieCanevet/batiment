<?php
include '../model/delete_post.php';

if (isset($_GET['click'])){ // suppression des projets

	$delete = delete($_GET['click'], $bdd);
	header('Location:project_sheet.php?id=' . $id_project . '&id_task=' . $value['id']);
}

if (isset($_GET['del'])){ // suppression des sous étapes
	$delete = delete_substep($_GET['del'], $bdd);
	$id_project = $_GET['id'];
	include '../vue/delete_substep_vue.php';
}

if (isset($_GET['delete'])){ // suppression des taches
	$delete = delete_task($_GET['delete'], $bdd);
	$id_project = $_GET['id'];
	include '../vue/delete_task_vue.php';
}