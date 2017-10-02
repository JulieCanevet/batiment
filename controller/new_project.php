<?php
session_start();
ob_start();
include '../model/new_project_post.php';
include '../vue/header_vue.php'; // ajout du header page d'accueil
include '../vue/new_project_vue.php'; // formulaire d'ajout nouveau projet

if (!empty($_POST['construction_name']) && !empty($_POST['project_manager']) && !empty($_POST['description']) && !empty($_POST['start_date']) && !empty($_POST['end_date'])){ // si les champs sont remplis

//verif date debut est au bon format
	if(preg_match('@^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$@', $_POST['start_date'])){
			
			if(preg_match('@^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$@', $_POST['end_date'])){

	$create_project = create_project($_POST['construction_name'], $_POST['project_manager'], $_POST['description'], $_POST['start_date'], $_POST['end_date'], $bdd); // insere les données dans la base

header('Location:home_page.php');
ob_end_flush();
}
else{
	echo 'la date de fin est au mauvais format';
}
}
else {
	echo 'la date de début est au mauvais format';
}

}
include '../vue/footer_vue.php';
