
                  function starttime(){
                  	var mydate = new Date(); 
              	    	document.getElementById("help").innerHTML=mydate.getFullYear();
              	    	document.getElementById("help2").innerHTML=mydate.getMonth();;
              	    	document.getElementById("help3").innerHTML=mydate.getDate();
              	    	document.getElementById("help4").innerHTML=mydate.toLocaleTimeString();	
              	    	setTimeout('starttime()',500);
                  }
                     	
                  		
                    	
              	    	
                    
                    	
                 
