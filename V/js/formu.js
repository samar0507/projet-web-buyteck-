function verif() {


    var nom = document.f.nom.value
    
    var prenom = document.f.prenom.value
    var email = document.f.email.value
    var index = email.indexOf("@esprit.tn");
    var password = document.f.passwordd.value;
    var num =document.f.noo.value
   /* var erruer=document.getElementById("erreur").value*/
/* Nom doivent être des lettres et commençant par des majuscules*/

if (nom == "") {
    window.alert("veiller ecrire votre nom ")
    
}



if (!(/^[a-zA-Z]+$/.test(document.f.nom.value))) {
    alert('le champs nom doit contenire du caractere ')

}
/***************************************************************** */

/* prenom doivent être des lettres et commençant par des majuscules*/
if (prenom == "") {
    window.alert("veiller ecrire votre prenom ")
}


if (!(/^[a-zA-Z]+$/.test(document.f.prenom.value))) {
    alert('le champs prenom doit contenire du caractere ')

}
 /* Le champ mail doit impérativement contenir un email qui finit par @esprit.tn*/

 if (email == "") {
    window.alert("veiller ecrire votre email ")
}



if (index == -1) { alert("Le champ mail doit impérativement contenir un email qui finit par @esprit.tn."); }



/* ************************************************************************/
/* Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.*/


if (document.f.password.value == "") {
    window.alert("veiller ecrire votre mot de passe  ")
}


if (!(document.f.password.value.match(/([a-zA-Z])/) && document.f.password.value.match(/([0-9])/))) {

    window.alert(" mot de passe invalide")
}

/**************************************************************************************** */


/* confirmation passe*/
if(document.f.password.value!=document.f.mdpp.value)
{
    window.alert(" le mot de passe doit etre le meme");
}
/*********************************************************************** */
if(isNaN(num)){
    window.alert(" num tel 8 chiffre")
}
if(num.length!=8){
    window.alert(" num tel 8 chiffre")
}
















}