<?php
require '../Core/CommandeCore.php';
require '../Entities/commande.php';
require '../Core/PanierCore.php' ;
$Panier=new PanierCore();
if (isset($_POST['quantite'])) {
    # code...
    $commande = new commande($_POST['quantite'], $_POST['idpanier']);

    $com = new CommandeCore();
    $idscom = $com->idscommande($_POST['id']);
    foreach ($idscom as $idcom) {
        if ($idcom['quantite'] > $_POST['quantite']) {

            $prod = $com->afficherquantite($_POST['id']);
            $produit = $Panier->recherchequantite($prod[0]->idpanier);
            $quantite = $Panier->rechercheprod($produit[0]->idProduit);
            echo $prod[0]->quantite + $quantite[0]->quantite - $_POST['quantite'];
            $Panier->Modifierquantite($prod[0]->quantite + $quantite[0]->quantite - $_POST['quantite'], $produit[0]->idProduit);
            $com->ModifierCommande($commande, $_POST['id']);
        } else {
            ?>
            <script>
                alert('quantite doit etre inferieur a celle qui precede');
            </script>
            <?php

        }

    }
    header("Location:AfficherCommande.php");
}
else
{
    echo "verifier les champs";
}

?>