<?php      
   
try //Connexion to base de donnees
{
    $bdd = new PDO('mysql:host=localhost;dbname=batiment;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// tchek if name is unique
function name ($name, $bdd){
	$name = $bdd -> prepare('SELECT *
		FROM login
		WHERE name = :name
		');
	$name -> execute(array(
		'name' => $_POST['name']
	));
	$name = $name -> fetch();
	return $name;
}

function inscription ($name, $first_name, $age, $email, $pass, $bdd){
	$inscription = $bdd -> prepare ('INSERT INTO login (name, first_name, age, email, pass)
		VALUES (:name, :first_name, :age, :email, :pass)');
	$inscription -> execute(array(
		'name' => $_POST['name'],
		'first_name' => $_POST['first_name'],
		'age' => $_POST['age'],
		'email' => $_POST['email'],
		'pass' => $_POST['pass']
	));
}











