<?php
	$host="localhost";
	$username="root";
	$password="";
	$db_name="event";
	$tab_name="user";
	mysql_connect($host,$username,$password) or die ('impossibile connettersi al server: '.mysql_error());
	mysql_select_db($db_name) or die ('accesso al database non riuscito: '.mysql_error());
	//aquisizione dati dal form html
	$username=$_POST["username"];
	$password=$_POST["password"];
	//lettura della tabella utenti
	$sql = "SELECT *
				FROM user 
				WHERE user.username ='$username' AND user.password ='$password'";	
	$result = mysql_query($sql);
	$conta = mysql_num_rows($result);
	if($conta==1){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("Location: FormHome.php");
	}
	else{
		echo "identificazione non riuscita: nome utente o password errati <br />";
	}
?>

<html>
<head>
</head>
<body>
	premi su <a href="FormLogin.html">Login </a> per tornare alla pagina di login
</body>
</html>

