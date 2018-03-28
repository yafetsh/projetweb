<?php
require '../Core/PanierCore.php' ;
$Panier=new PanierCore();
if (isset($_GET['reference']))
{
$product=$Panier->AfficherPanierSession("select reference from produit where reference=:reference",array('reference' => $_GET['reference']));
if(empty($product))
    die("Ce produit n'existe pas");
   $Panier->add($product[0]->reference) ;
   die('le produit a bien été ajouté a votre panier <a href="javascript:history.back()">retourner sur le catalogue</a>');

}

else
{
    die("vous n'avez pas sélectionner de produit a ajouter au panier ");
}
?>