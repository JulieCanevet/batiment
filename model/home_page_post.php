<?php      
   
try //Connexion to base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=batiment;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// fonction de récupération des cartes de projets
function home_project(){
	global $bdd;
	$project = $bdd -> query('SELECT * FROM construction_project');
	return $project;
}