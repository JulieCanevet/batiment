<?php
try //Connexion to database
{
    $bdd = new PDO('mysql:host=localhost;dbname=building;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function add_substep($title, $substep_description, $id_task, $executed_substep){ // add new substed in database
	global $bdd;

	$req = $bdd -> prepare('INSERT INTO substep (title, substep_description, id_task, executed_substep) 
		VALUES (:title, :substep_description, :id_task, :executed_substep)');

	$req -> execute(array(
		'title' => $_POST['title'],
		'substep_description' => $_POST['substep_description'],
		'id_task' => $id_task,
		'executed_substep' => 'false'
	));
}

function display_substep($id_task){ // Select all substeps related to the project
	global $bdd;

	$req = $bdd -> prepare('SELECT * 
		FROM substep
		WHERE id_task = :id_task
		');

	$req -> execute(array(
		'id_task' => $id_task
	));
	$new_substep = $req -> fetchAll();
	return $new_substep;
	}



