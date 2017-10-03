<?php      
   
try //Connexion to database
{
    $bdd = new PDO('mysql:host=localhost;dbname=building;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// check if the name exists
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