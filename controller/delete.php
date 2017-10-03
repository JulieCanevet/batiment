<?php
include '../model/delete_post.php';

if (isset($_GET['click'])){ // suppression of projects

	$delete = delete($_GET['click'], $bdd);
	header('Location:home_page.php');
}

if (isset($_GET['del'])){ // suppression of substeps
	$delete = delete_substep($_GET['del'], $bdd);
	$id_project = $_GET['id'];
	header('Location:project_sheet.php?id=' . $id_project);
}

if (isset($_GET['delete'])){ // suppression of tasks
	$delete = delete_task($_GET['delete'], $bdd);
	$id_project = $_GET['id'];
	header('Location:project_sheet.php?id=' . $id_project);
}