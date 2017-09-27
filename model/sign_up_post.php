<?php      
   
try //Connexion to base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=batiment;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function check_name($name, $bdd) {
	$req = $bdd -> prepare ('SELECT * 
		FROM login
		WHERE name = :name');
	$req -> execute (array(
		'name' => $name
	));
	$check_name = $req->fetch();
	return $check_name;
}