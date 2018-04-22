<?php
require '../Core/CommandeCore.php';
require '../Core/PanierCore.php' ;
if (isset($_GET['id'])) {
    # code...
$Panier=new PanierCore();

    $com = new CommandeCore();
    $prod=$com->afficherquantite($_GET['id']);
    $produit=$Panier->recherchequantite($prod[0]->idpanier);

        $quantite = $Panier->rechercheprod($produit[0]->idProduit);
        $Panier->Modifierquantite($prod[0]->quantite + $quantite[0]->quantite,$produit[0]->idProduit);
    $com->SupprimerCommande($_GET['id']);
    header("Location:AfficherCommande.php");

    }
else
{
    echo "verifier les champs";
}

?>