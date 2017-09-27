<?php
try //Connexion to database
{
    $bdd = new PDO('mysql:host=localhost;dbname=batiment;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// tchek if name is unique
function project ($id_project, $bdd){
	$req = $bdd -> prepare('SELECT * FROM construction_project
		WHERE id = :id');
	
	$req -> execute (array(
		'id' => $id_project
	));
	$project = $req -> fetch();
	return $project;
}