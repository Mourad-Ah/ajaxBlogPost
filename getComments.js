//appel de la fonction getEtudiants depuis le fichier html "etudiantsAvecAjax.php"

function getComments(){

   //Recupération de la donnée introduite dans le input contenant l'id "data " du fichier html "etudiantsAvecAjax.php"

    var comment=  document.getElementById("data").value;

    var	xhr	=	new	XMLHttpRequest();	

    xhr.onreadystatechange	=	function() {	
             if	(xhr.readyState	==	4	&&	xhr.status	==	200)    {	
              
                var reponse = xhr.responseText;
                
                document.getElementById("Affichage").innerHTML += reponse;


                var enfant = document.createElement("h1");
                enfant.innerHTML =comment;
                enfant.style.color = "green";
                enfant.style.fontSize="18px";
                enfant.style.background="lightblue";
                var parent =document.getElementById('Affichage');
                parent.appendChild(enfant);


             }	
   };	

//Ouverture de la requete AJAX
   xhr.open('POST', 'save_comment.php');
   xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


//Envoi de la requête
    var data = 'comment='+comment;
    xhr.send(data);
  
  // xhr.send();
}

