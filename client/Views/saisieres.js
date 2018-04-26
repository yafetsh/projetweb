function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
function verif() {
       erreur = 0;
       with(document.ajout) {
            if(nom.value == "") {
               nom.style.backgroundColor = "#fba";

               erreur = 1;
            }
            else {
              nom.style.backgroundColor = "";
            }

            if(prenom.value == "") {
               prenom.style.backgroundColor = "#fba";
               erreur = 1;
            }
            else {
              prenom.style.backgroundColor = "";
            }

  if (telephone.value.length!=8) {
    telephone.style.backgroundColor = "#fba";
    erreur = 1;
  }
  else {
    telephone.style.backgroundColor = "";
  }
  var d1 = new Date();
  var d2= d1.getTime();
 var d3= Date.parse(date.value);

if (d2>d3) {
  date.style.backgroundColor = "#fba";
  alert ("Entrer une date valide!");
  erreur = 1;
}
else {
date.style.backgroundColor = "";
}


}
  if(erreur == 0) {
     return true;
  } else {
      return false;
  }
}
