<?php	
	//Get Heroku ClearDB connection information
	$cleardb_server = "eu-cdbr-west-02.cleardb.net";
	$cleardb_username = "be89b74cd405c2";
	$cleardb_password = "2d67980f";
	$cleardb_db = "heroku_9abe1d6d35f5f58";
	
	try{
		// Connect to DB
		$database = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
	} catch(PDOExeption $e){
		die('Erreur :'.$e->getMessage());
	}
?>