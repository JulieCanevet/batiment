<?php
try //Connexion to database
{
    $bdd = new PDO('mysql:host=localhost;dbname=batiment;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function delete ($id_d, $bdd){
	$req = $bdd -> prepare('DELETE FROM construction_project
		WHERE id = :id');
	$req -> execute(array(
		'id' => $id_d
	));
}