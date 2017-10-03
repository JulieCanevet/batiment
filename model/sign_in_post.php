<?php      
   
try //Connexion to database
{
    $bdd = new PDO('mysql:host=localhost;dbname=building;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// tchek if name is unique
function name ($username, $bdd){
	$name = $bdd -> prepare('SELECT *
		FROM login
		WHERE name = :name
		');
	$name -> execute(array(
		'name' => $username
	));
	$name = $name -> fetch();
	return $name;
}

// insertion of datas in database
function inscription ($name, $first_name, $age, $email, $pass, $bdd){
	$inscription = $bdd -> prepare ('INSERT INTO login (name, first_name, age, email, pass)
		VALUES (:name, :first_name, :age, :email, :pass)');
	$inscription -> execute(array(
		'name' => $name,
		'first_name' => $first_name,
		'age' => $age,
		'email' => $email,
		'pass' => $pass
	));
}











