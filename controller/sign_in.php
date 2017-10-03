<?php 
session_start();
// if all fields are full
if(!empty($_POST['name']) && !empty($_POST['first_name']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['pass'])){
include '../model/sign_in_post.php';

if(preg_match("#^[1-9]{2}$#", $_POST['age'])){
	if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])){

//launches the function to know if the name is unique
	$name = name($_POST['name'], $bdd);
	
	if($name){ // if the name is not unique
		echo 'un utilisateur a le même nom que toi (surement ton frere), ajoute un chiffre derriere';
	}
	else {
		// hide password
		$pass_hache = sha1($_POST['pass']);
		// else, launches the function to save informations in database
		inscription($_POST['name'], $_POST['first_name'], $_POST['age'], $_POST['email'], $pass_hache, $bdd);

		// save session variable name and firstname
		$_SESSION['first_name'] = $_POST['first_name'];
		$_SESSION['name'] = $_POST['name'];

		// redirection to home page
		ob_start();
		header('Location:home_page.php');
		ob_end_flush();
	}
	}
	else {
		echo 'saisie email incorect';
	}
}
else {
	echo 'l\'age n\'est pas correct';
}
}
include '../vue/sign_in_vue.php';
