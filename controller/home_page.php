<?php 
session_start();
include '../model/home_page_post.php';
include '../vue/header_vue.php'; // ajout du header page d'accueil

$project = home_project();

include '../vue/home_page_vue.php'; // ajout des derniers projets