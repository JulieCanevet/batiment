<?php
include '../model/delete_post.php';
if (isset($_GET['click'])){

	$delete = delete($_GET['click'], $bdd);
include '../vue/delete_vue.php';

}