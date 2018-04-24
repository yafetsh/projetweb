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
               alert("Veuillez remplir votre nom");
               nom.style.backgroundColor = "#fba";

               erreur = 1;
            }
            else {
              nom.style.backgroundColor = "";
            }
            if(prenom.value == "") {
               alert("Veuillez remplir votre prenom");
               prenom.style.backgroundColor = "#fba";
               erreur = 1;
            }
            else {
              prenom.style.backgroundColor = "";
            }
            var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
  if(!regex.test(mail.value))
  {
    alert("Entrer une adresse mail valide");
    mail.style.backgroundColor = "#fba";
    erreur = 1;
  }
  else {
  mail.style.backgroundColor = "";
  }
  if (telephone.value.length!=8) {
    alert("Entrer un numero telephone de 8 chiffre");
    telephone.style.backgroundColor = "#fba";
    erreur = 1;
  }
  else {
    telephone.style.backgroundColor = "";
  }
  if(cause.value == "") {
     alert("Veuillez remplir votre cause de réclamation");
     cause.style.backgroundColor = "#fba";

     erreur = 1;
  }
  else {
    cause.style.backgroundColor = "";
  }

       }
       if(erreur == 0) {
          return true;
       } else {
           return false;
       }
     }
