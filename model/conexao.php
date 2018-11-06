<?php
	try {
	  $con = new PDO("mysql:host=127.0.0.1;port=8889;dbname=fib", "admin", "admin");
	    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $con->exec("SET CHARACTER SET utf8");
	} 

	catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

?>


