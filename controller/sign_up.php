<?php
session_start();

include '../model/sign_up_post.php';

if(!empty($_POST['name']) && !empty($_POST['pass'])){

	$check_name = check_name($_POST['name'], $bdd); // launches function to check the name
	$pass_hache = sha1($_POST['pass']);

	if(!$check_name){ // if no matching name
		echo 'pseudo incorrect';
	}	
	elseif($pass_hache != $check_name['pass']){ // if matching name but no password
		echo 'mot de passe incorrect';
	}
	elseif ($pass_hache == $check_name['pass']){ // if name and password are matching
		
		// save session variables of name and firstname
		$_SESSION['first_name'] = $check_name['first_name'];
		$_SESSION['name'] = $_POST['name'];
		
		header('Location:home_page.php');
	}
}

include '../vue/sign_up_vue.php';
include '../vue/footer_vue.php';

?>