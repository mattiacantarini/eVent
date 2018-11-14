  
    	$(document).ready(function() {   

      	$.ajax({  
          type: "POST",
          url: "EventiHome.php",  
          success: function(risposta) {  
            $("div#risposta").html(risposta); 
          },
          error: function(){
            alert("Chiamata fallita!!!");
          } 
        });

        return false;  
    	});
