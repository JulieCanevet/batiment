<?php 
session_start();
// Si tous les champs sont remplis
if(!empty($_POST['name']) && !empty($_POST['first_name']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['pass'])){
include '../model/sign_in_post.php';

//lancement de la fonction pour savoir si le pseudo est unique
	$name = name($_POST['name'], $bdd);
	
	if($name){ // Si le nom est déjà pris
		echo 'un utilisateur a le même nom que toi (surement ton frere), ajoute un chiffre derriere';
	}
	else {
		// Sinon lancement de la fonction pour enregistrer les infos en bdd
		inscription($_POST['name'], $_POST['first_name'], $_POST['age'], $_POST['email'], $_POST['pass'], $bdd);

		// enregistrement des variables de session nom et prénom
		$_SESSION['first_name'] = $_POST['first_name'];
		$_SESSION['name'] = $_POST['name'];

		// redirection vers la page d'accueil
		ob_start();
		header('Location:home_page.php');
		ob_end_flush();
	}
}
include '../vue/sign_in_vue.php';
