<?php
session_start();
// include "Reference.php";
include '../vue/header_vue.php';
include '../model/project_sheet_post.php';

$id_project = $_GET['id'];

$project = project($id_project, $bdd);

include '../vue/project_sheet_vue.php';     
