<?php	
	$servername = 'eu-cdbr-west-02.cleardb.net';
	$dbname = 'heroku_9abe1d6d35f5f58';
	$username = 'be89b74cd405c2';
	$password = '2d67980f';
	
	try {
	  $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  // set the PDO error mode to exception
	  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  echo "Connected successfully";
	} catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
	}

?>