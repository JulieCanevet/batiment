<?php
include '../model/delete_post.php';

if (isset($_GET['click'])){

	$delete = delete($_GET['click'], $bdd);
	include '../vue/delete_vue.php';
}

if (isset($_GET['del'])){
	$delete = delete_substep($_GET['del'], $bdd);
	$id_project = $_GET['id'];
	include '../vue/delete_substep_vue.php';

}