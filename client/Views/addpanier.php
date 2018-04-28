<?php
require '../Core/PanierCore.php';
require '../Entities/panier.php';
$Panier=new PanierCore();

if (isset($_GET['reference']))
{
    $quan=$Panier->rechercheprod($_GET['reference']);
$product=$Panier->AfficherPanierSession("select reference from produit where reference=:reference",array('reference' => $_GET['reference']));

    $quantite=$_SESSION['panier'][$product[0]->reference];

if(empty($product))
    die("Ce produit n'existe pas");
if ($quan[0]->quantite > $quantite) {

    $Panier->add($product[0]->reference);
    header("Location:Produit.php");

}
else die('Stock epuisé!!<a href="javascript:history.back()">retourner sur le catalogue');
}

else
{
    die("vous n'avez pas sélectionner de produit a ajouter au panier ");
}
?>

