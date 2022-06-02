<?php	
	define('HOST','localhost');
	define('DB_Name','bloodless');
	define('USER','root');
	
	try{
		$database = new PDO("mysql:host=" . HOST . ";dbname=" . DB_Name, USER);
	} catch(PDOExeption $e){
		die('Erreur :'.$e->getMessage());
	}
?>