<?php
$conn="";

try {
		$servername = "localhost";
		$dbname = "id8609549_requiza";
		$username = "id8609549_requiza";
		$password = "Club1234";

	    $conn = new PDO("mysql:host=$servername;dbname=id8609549_requiza", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }


?>    