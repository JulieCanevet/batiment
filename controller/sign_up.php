<?php
session_start();

include '../model/sign_up_post.php';

if(!empty($_POST['name']) && !empty($_POST['pass'])){

	$check_name = check_name($_POST['name'], $bdd); //lancement de la fonction
	$pass_hache = sha1($_POST['pass']);

	if(!$check_name){ // Si aucun nom ne correspond
		echo 'pseudo incorrect';
	}	
	elseif($pass_hache != $check_name['pass']){ // si le nom est trouvé mais pas le pass
		echo 'mot de passe incorrect';
	}
	elseif ($pass_hache == $check_name['pass']){ // si le nom et le mdp correspondent
		
		// enregistrement des variables de session nom et prénom
		$_SESSION['first_name'] = $check_name['first_name'];
		$_SESSION['name'] = $_POST['name'];
		
		header('Location:home_page.php');
	}
}

include '../vue/sign_up_vue.php';
?>