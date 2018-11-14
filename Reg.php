<?php
	$host="localhost";
	$username="root";
	$password="";
	$db_name="event";
	$tab_name="user";
	// Create connection
	$conn = new mysqli($host,$username, $password, $db_name);
	// Check connection
	if ($conn->connect_error) {
   		die("Connection failed: " . $conn->connect_error);
	} 
	//aquisizione dati dal form html
	$username=$_POST["username"];
	$password=$_POST["password"];
	$nome=$_POST["nome"];
	$cognome=$_POST["cognome"];
	$tel=$_POST["tel"];
	$sesso=$_POST["sesso"];
	$data_nascita=$_POST["data_nascita"];
	$citta_interesse=$_POST["citta_interesse"];

	if($citta_interesse == null)
		$citta_interesse = '%';

	//inserimento
	$sql = "INSERT INTO user(nome,cognome,sesso,data_nascita,citta_interesse,tel,username,password)
				VALUES ('$nome','$cognome','$sesso','$data_nascita','$citta_interesse','$tel','$username','$password')";

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


	header("Location: FormLogin.html");
	
	
?>

