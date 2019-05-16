<?php
	include_once('connection.php');

	//print("Hello World!");
	$email_id = $password = "";

	function test_input($data) {
 	 	$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $email_id = test_input($_POST["email_id"]);
	  $password = test_input($_POST["password"]);
	  //echo "Adm No: " .$admission_number. " Pass: " .$password;
	}else{
		echo "failed";
	}

    $stmt = $conn->query("SELECT * FROM hit_the_logo");
	$users = $stmt->fetchAll();
	//var_dump($users);
	foreach ($users as $user){
		if($user["student_email"]==$email_id && $user["student_password"]==$password){
				header("Location: welcomepage.php");
			}
			else{
			header("Location: index.php?status=failed");
			die();
			}
		}
	


?>