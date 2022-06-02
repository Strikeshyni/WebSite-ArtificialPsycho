<?php	
	define('HOST','eu-cdbr-west-02.cleardb.net');
	define('DB_Name','heroku_9abe1d6d35f5f58');
	define('USER','be89b74cd405c2');
	define('PASS','2d67980f');
	
	try{
		$database = new PDO("mysql:host=" . HOST . ";dbname=" . DB_Name, USER, PASS);
	} catch(PDOExeption $e){
		die('Erreur :'.$e->getMessage());
	}
?>