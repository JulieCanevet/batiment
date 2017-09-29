<?php 
session_start();
// Si tous les champs sont remplis
if(!empty($_POST['name']) && !empty($_POST['first_name']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['pass'])){
include '../model/sign_in_post.php';

	if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])){
//lancement de la fonction pour savoir si le pseudo est unique
	$name = name($_POST['name'], $bdd);
	
	if($name){ // Si le nom est déjà pris
		echo 'un utilisateur a le même nom que toi (surement ton frere), ajoute un chiffre derriere';
	}
	else {
		// cache le mot de passe
		$pass_hache = sha1($_POST['pass']);
		// Sinon lancement de la fonction pour enregistrer les infos en bdd
		inscription($_POST['name'], $_POST['first_name'], $_POST['age'], $_POST['email'], $pass_hache, $bdd);

		// enregistrement des variables de session nom et prénom
		$_SESSION['first_name'] = $_POST['first_name'];
		$_SESSION['name'] = $_POST['name'];

		// redirection vers la page d'accueil
		ob_start();
		header('Location:home_page.php');
		ob_end_flush();
	}
}
else {
	echo 'saisie email incorect';
}
}
include '../vue/sign_in_vue.php';
