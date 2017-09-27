<?php      
   
try //Connexion to base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=batiment;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function create_project($construction_name, $project_manager, $description, $start_date, $end_date, $bdd){
	$req = $bdd -> prepare('INSERT INTO construction_project
		(construction_name, project_manager, description, start_date, end_date) 
		VALUES (:construction_name, :project_manager, :description, :start_date, :end_date)');
	
	$req -> execute(array(
		'construction_name' => $construction_name,
		'project_manager' => $project_manager,
		'description' => $description,
		'start_date' => $start_date,
		'end_date' => $end_date
	));
}