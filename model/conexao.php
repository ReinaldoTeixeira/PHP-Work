<?php
	try {
		echo "TESTE ----------------------------------------------------------------------------\n\n";
	  	$con = new PDO("mysql:host=localhost;dbname=fib", "admin", "admin");
	    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $con->exec("SET CHARACTER SET utf8");
	} 
	catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

?>


