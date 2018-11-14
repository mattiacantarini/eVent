 
function enter(event){
	var nome = document.getElementById('nome').value; 
	var citta = document.getElementById('citta').value;
	var provincia = document.getElementById('provincia').value;
	var regione = document.getElementById('regione').value;
	var info = document.getElementById('info').value;
	var prezzo = document.getElementById('prezzo').value;
	var data = document.getElementById('data').value;
	var numpartecipanti = document.getElementById('numpartecipanti').value;
	var organizzatore = document.getElementById('organizzatore').value;
    $.ajax({
		type: "POST",
        url: "ElabFiltri.php",  
        data: "nome="+ nome + "&citta=" + citta + "&provincia=" + provincia + "&regione=" + regione + "&info=" + info + "&prezzo=" + prezzo + "&data=" + data + "&numpartecipanti=" + numpartecipanti + "&organizzatore=" + organizzatore,
        dataType: "html",
        success: function(risposta) {  

   			$("div#eventi").html(risposta); 
    	}, 
    
		error: function(){
    		alert("Chiamata fallita!!!");
		}
	}); 
	}

	var test = document.getElementById('butfiltri');
	test.addEventListener('click', enter);
	

