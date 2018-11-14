
<?php
	$host="localhost";
	$username="root";
	$password="";
	$db_name="event";

	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: FormLogin.html");
	}

?>

<html>
	<head>
		<script src="http://code.jquery.com/jquery-latest.js"></script> 
    	<script src="home.js"></script>
    </script>  
	</head>
	<body>
		<form class= "form" action="ListaEventi.php" method = "post">
  			<input type="submit" value="Eventi">
  		</form>

  		<form class= "form" action="ListaEventi.php" method = "post">
  			<input type="submit" value="PR">
  		</form>

  		<form class= "form" action="ListaEventi.php" method = "post">
  			<input type="submit" value="Autisti">
  		</form>

  		<form class= "form" action="Logout.php" method = "post">
  			<input type="submit" value="Logout">
  		</form>

  		<div id="risposta"></div>  

	</body>
</html>
  

