<?php
try //Connexion to database
{
    $bdd = new PDO('mysql:host=localhost;dbname=batiment;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function add_task($task_name, $id_project, $executed){ // envoie nvl taches dans bdd
	global $bdd;

	$req = $bdd -> prepare('INSERT INTO add_task (task_name, id_project, executed) 
		VALUES (:task_name, :id_project, :executed)');

	$req -> execute(array(
		'task_name' => $_POST['task_name'],
		'id_project' => $id_project,
		'executed' => $executed
	));
}

function create_task($id_project){ // Selectionne les tâches concernées par le projet
	global $bdd;

	$req = $bdd -> prepare('SELECT * 
		FROM add_task
		WHERE id_project = :id_project
		');

	$req -> execute(array(
		'id_project' => $id_project
	));
	$new_task = $req -> fetchAll();
	return $new_task;
	}



