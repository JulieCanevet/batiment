<?php 
// Si tous les champs sont remplis
if(!empty($_POST['name']) && !empty($_POST['first_name']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['pass'])){
include '../model/sign_in_post.php';

//lancement de la fonction pour savoir si le pseudo est unique
	$name = name($_POST['name'], $bdd);
	if($name){
		echo 'change de nom, déjà utilisé';
	}
	else {
		inscription($_POST['name'], $_POST['first_name'], $_POST['age'], $_POST['email'], $_POST['pass'], $bdd);
		
		ob_start();
		header('Location:index.php');
		ob_end_flush();
	}
include '../vue/sign_in_vue.php';

}