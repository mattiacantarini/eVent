<?php
session_start();
//elimina le variabili di sessione impostate
$_SESSION = array();
//elimina la sessione
session_destroy();
echo "disconnessione riuscita"
?>

<html>
<head>
	
</head>
<body>
	premi su <a href="FormLogin.html">Login </a> per tornare alla pagina di login
</body>
</html>