
function verif() {
    var errors = "<ul>";
    var nom=document.getElementById("nom");
    var nom_cat=document.getElementById("nom_cat");
    var description=document.getElementById("description");
    var prix=document.getElementById("prix");
    var quantite=document.getElementById("quantite");
    var disponibilite=document.getElementById("disponibilite");
  
    if (nom.charAt(0) < "A" || nom.charAt(0) > "Z") {
      errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }
    if (nom_cat.charAt(0) < "A" || nom_cat.charAt(0) > "Z") {
      errors += "<li>Le nom_cat doit commencer par une lettre Majuscule </li>";
    }
    if (description.charAt(0) < "A" || description.charAt(0) > "Z") {
        errors += "<li>Le description doit commencer par une lettre Majuscule </li>";
      }
      if (prix.charAt(0) < "0" || prix.charAt(0) > "9") {
        errors += "<li>Le prix doit commencer par une lettre Majuscule </li>";
      }
      if (quantite.charAt(0) < "0" || quantite.charAt(0) > "9") {
        errors += "<li>Le quantite doit commencer par une lettre Majuscule </li>";
      }
      if (disponibilite.charAt(0) < "A" || disponibilite.charAt(0) > "Z") {
        errors += "<li>Le disponibilite doit commencer par une lettre Majuscule </li>";
      }
         
   if (errors !== "<ul>") {
      document.querySelector("#erreur").style.color = "red";
      errors += "</ul>";
      document.getElementById("erreur").innerHTML = errors;
      return false;
    } 
  }
  