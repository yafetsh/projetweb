<?php
require '../Core/PanierCore.php' ;
require '../Core/CommandeCore.php';
require '../Entities/commande.php';
$Panier=new PanierCore();

    $idprod1=$Panier->rechercheidprod(1);
    foreach ($idprod1 as $idprod)
    {
    $commande = new commande($idprod->quantite,$idprod->id);

    $com = new CommandeCore();

           $com->AjouterCommande($commande);
           $quantite = $Panier->rechercheprod($idprod->idProduit);
           $Panier->Modifierquantite($quantite[0]->quantite - $idprod->quantite, $idprod->idProduit);
}
header("Location:AfficherCommande.php");


?>