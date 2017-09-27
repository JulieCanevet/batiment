<?php
session_start();
include '../vue/header_vue.php'; // ajout du header page d'accueil
include '../vue/new_project_vue.php'; // formulaire d'ajout nouveau projet
include '../model/new_project_post.php';

if (!empty($_POST['construction_name']) && !empty($_POST['project_manager']) && !empty($_POST['description']) && !empty($_POST['start_date']) && !empty($_POST['end_date'])){ // si les champs sont remplis

	$create_project = create_project($_POST['construction_name'], $_POST['project_manager'], $_POST['description'], $_POST['start_date'], $_POST['end_date'], $bdd); // insere les données dans la base
}