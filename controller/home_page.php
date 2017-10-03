<?php 

session_start();
	ob_start();
if(isset($_SESSION['name'])){
	include '../model/home_page_post.php';
	include '../vue/header_vue.php'; // add header home page

	$project = home_project();

include '../vue/home_page_vue.php'; // add projects
include '../vue/footer_vue.php';
}
else {

echo 'veuillez vous inscrire ou vous connecter';
header('Refresh: 2; index.php');
ob_end_flush();
}
