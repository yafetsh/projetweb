function verif() {
       erreur = 0;
       with(document.ajout) {
         var re = new RegExp("[0-9-.+*,:;@]");
         var str= nom.value;
            if ((nom.value == "") || re.test(str) || (nom.value.length <3)) {
               nom.style.backgroundColor = "#fba";

               erreur = 1;
            }
            else {
              nom.style.backgroundColor = "";
            }
            var str= prenom.value;

            if((prenom.value == "") || re.test(str) || (prenom.value.length <3)) {
               prenom.style.backgroundColor = "#fba";
               erreur = 1;
            }
            else {
              prenom.style.backgroundColor = "";
            }
            var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
  if(!regex.test(mail.value))
  {
    mail.style.backgroundColor = "#fba";
    erreur = 1;
  }
  else {
  mail.style.backgroundColor = "";
  }
  if (telephone.value.length!=8) {
    telephone.style.backgroundColor = "#fba";
    erreur = 1;
  }
  else {
    telephone.style.backgroundColor = "";
  }
  if((cause.value == "") || (cause.value.length < 20)) {
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
