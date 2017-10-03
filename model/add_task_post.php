<?php
try //Connexion to database
{
    $bdd = new PDO('mysql:host=localhost;dbname=building;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function add_task($task_name, $id_project, $executed){ // add new task in database
	global $bdd;

	$req = $bdd -> prepare('INSERT INTO tasks (task_name, id_project, executed) 
		VALUES (:task_name, :id_project, :executed)');

	$req -> execute(array(
		'task_name' => $_POST['task_name'],
		'id_project' => $id_project,
		'executed' => $executed
	));
}

function display_task($id_project){ // Select tasks related to the project
	global $bdd;

	$req = $bdd -> prepare('SELECT * 
		FROM tasks
		WHERE id_project = :id_project
		');

	$req -> execute(array(
		'id_project' => $id_project
	));
	$new_task = $req -> fetchAll();
	return $new_task;
	}

function update($executed, $id_project, $id){ // update task executed statute
	global $bdd;
	
	$req = $bdd -> prepare ('UPDATE tasks
		SET executed = :executed
		WHERE id_project = :id_project AND id = :id
		');
	
	$req->execute(array(
		'executed' => $executed,
		'id_project' => $id_project,
		'id' => $id
	));
	}
















