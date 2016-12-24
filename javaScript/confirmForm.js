// JavaScript Document
// JavaScript Document
function verif_add(form){
           
            if(document.form.add.value == "") {
               alert("veuillez saisir une adresse mail.");                
			   return false;
            }


			if(document.form.add.value.indexOf('@', 0) == -1) {
        alert("entrez une adresse contenant @");
		return false;
}
}
function verif_cnfAdd(form){
              if(document.form.cnfAdd.value == ""){
               alert("veuillez confirmer votre adresse.");                
			   return false;
            }
			
			if(document.form.cnfAdd.value != document.form.add.value){
               alert("Les adresses e-mail ne correspondent pas.");   
			   return false;             
			}
}
			function verif_mdp(form){
				
              if(document.form.mdp.value ==""){
				 alert ("Veuillez saisire une mot de passe." ) ;
				 return false;
			 
			}
			}
           function verif_nom(form){
			
			if(document.form.nom.value == ""){
               alert("veuillez saisir un nom.");                
			   return false;
            }
		   }
		   function verif_prenom(form){
			if(document.form.prenom.value == ""){
               alert("veuillez saisir un prenom.");                
			  return false;
            }
		   }
		   function verif_tel(form){
			if(document.form.tel.value == ""){
               alert("veuillez saisir une numéro de telephone.");                
			   return false;
            }
		   }
		   function verif_region(form){
			if(document.form.region.selectedIndex == ""){
               alert("veuillez choisir un région.");                
			 return false; 
            }
		   }