<?php

	$host="localhost";
	$username="root";
	$password="";
	$db_name="event";

	
	mysql_connect($host,$username,$password) or die ('impossibile connettersi al server: '.mysql_error());
	mysql_select_db($db_name);

	$id_evento = $_POST["id_evento"];

	$query = "SELECT  evento.id_evento,evento.nome,evento.descrizione,evento.regione,evento.provincia,evento.citta,evento.via,evento.num_civico,evento.data,organizzatore.nome, count(*) as numpartecipanti
			from evento
			inner join organizzatore on evento.id_org=organizzatore.id_org
			inner join partecipazione on partecipazione.id_evento=evento.id_evento
			inner join user on user.id_user=partecipazione.id_user
			inner join prezzo on evento.id_evento=prezzo.id_evento
			where evento.id_evento = '$id_evento'
			group by evento.id_evento";

		$result=mysql_query($query);
		$conta=mysql_num_rows($result);
		$i=0;
		if($conta<1){
			print "<p>La ricerca non ha prodotto risultati </p>";
		}
		else{
			while($i<$conta){
			
				$nome=mysql_result($result,$i,"evento.nome");
				$descrizione=mysql_result($result,$i,"descrizione");
				$regione=mysql_result($result,$i,"regione");
				$provincia=mysql_result($result,$i,"provincia");
				$citta=mysql_result($result,$i,"citta");
				$via=mysql_result($result,$i,"via");
				$num_civico=mysql_result($result,$i,"num_civico");
				$data=mysql_result($result,$i,"evento.data");
				$nomeorg=mysql_result($result,$i,"organizzatore.nome");
				$numpartecipanti=mysql_result($result,$i,"numpartecipanti");


				echo "<p><b>Nome: </b>$nome</p>";
				echo "<p><b>Descrizione: </b>$descrizione</p>";
				echo "<p><b>Regione: </b>$regione</p>";
				echo "<p><b>Provincia: </b>$provincia</p>";
				echo "<p><b>Citta: </b>$citta</p>";
				echo "<p><b>Via: </b>$via</p>";
				echo "<p><b>Num_civico: </b>$num_civico</p>";
				echo "<p><b>data: </b>$data</p>";
				echo "<p><b>Organizzatore: </b>$nomeorg</p>";
				echo "<p><b>Num partecipanti: </b>$numpartecipanti</p>";

				$i++;	

			}
		}


?>

			