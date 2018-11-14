<?php
	$host="localhost";
	$username="root";
	$password="";
	$db_name="event";

	session_start();

	if(!isset($_SESSION['username'])){		
		header("Location: FormLogin.html");
	}

	mysql_connect($host,$username,$password) or die ('impossibile connettersi al server: '.mysql_error());
	mysql_select_db($db_name);

	$username = $_SESSION['username'];

	echo("<p id='loggedUser' > Loggato come " .$_SESSION['username'] . "</p>");
	

?>

<html>
<head>
	
   
  		<form class= "form" action="Logout.php" method = "post">
  			<input type="submit" value="Logout">
  		</form>

    	
</head>
<body>
	EVENTI

	
  <div id = "filtri">
   <p><input type= "text" placeholder = "nome evento" id = "nome"  ></p>
   <p><input type= "text" placeholder = "citta" id = "citta" ></p>
   <p><input type= "text" placeholder = "provincia"  id = "provincia"  ></p>
   <p><input type= "text" placeholder = "regione" id =  "regione" ></p>
   <p><input type= "text" placeholder = "informazioni evento" id =  "info" ></p>
   <p><input type= "number" placeholder = "prezzo max" id="prezzo" min="0" max=""></p>
   <p><input type= "date" id = "data" ></p>
   <p><input type= "number" placeholder = "num partecipanti min" id =  "numpartecipanti" ></p>
   <p><input type= "text" placeholder = "organizzatore" id =  "organizzatore" ></p>
   <p><input type="button" id="butfiltri" value="cerca" > </p>
   
  </div>

	

	<div id="eventi"></div>

	<script src="http://code.jquery.com/jquery-latest.js"></script>

	<script src="filtri.js"></script> 




</body>
</html>






