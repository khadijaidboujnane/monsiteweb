//variable globale 



//fonctions 
function validerformulaire(){
    if (document.getElementById("nom").value == "") { alert("Veuillez taper votre nom !"); return false;}
    if (document.getElementById("prenom").value == "") { alert("Veuillez taper votre prenom!"); return false;}
    if (document.getElementById("email").value == "") { alert("Veuillez entrer votre adresse e-mail!"); return false;}
    if (document.getElementById("email").value.indexOf('@') == -1) { alert("Adresse e-mail incorrecte!"); return false; }

     
}





//corps