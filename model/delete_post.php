<?php
try //Connexion to database
{
    $bdd = new PDO('mysql:host=localhost;dbname=building;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function delete ($id_d, $bdd){ // delete the project
	$req = $bdd -> prepare('DELETE FROM construction_project
		WHERE id = :id');
	$req -> execute(array(
		'id' => $id_d
	));
}

function delete_substep ($id_sub, $bdd){ // delete the substep
		$req = $bdd -> prepare('DELETE FROM substep
		WHERE id = :id');
	$req -> execute(array(
		'id' => $id_sub
	));
}

function delete_task ($id_task, $bdd){ // delete the task
		$req = $bdd -> prepare('DELETE FROM tasks
		WHERE id = :id');
	$req -> execute(array(
		'id' => $id_task
	));
}