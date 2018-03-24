<?php

  //Testons si le fichier a bien ete envoye et s'il n'y a pas d'erreur
    if (isset($_FILES['piece']) AND $_FILES['piece']['error'] == 0);

    {
  //Testons si le fichier n'est pas trop gros
    if ($_FILES['piece']['size'] <=3000000)
    {
  //Testons si l'extension est autorisée
    $infosfichier = pathinfo($_FILES['piece']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('.jpg', '.jpeg', '.gif', '.png');
    if (in_array($extension_upload, $extensions_autorisees))
    {
  //on peut valider le fichier et le stocker definitivement
  move_uploaded_file($_FILES['piece']['tmp_name'], './uploads/' . basename($_FILES['piece']['name']));
  echo "l'envoi a bien ete effectue !";
    }
  }
}
?>
