<?php

    include_once "../../Core/produitC.php";
    include_once "../../Core/imageC.php";
    include_once "../../Core/categorieC.php";
    include_once "../../Core/sous_categorieC.php";
    include_once "../../Entities/produit.php";
    include_once "../../Entities/image.php";
    include_once "../../Entities/categorie.php";
    include_once "../../Entities/sous_categorie.php";

    if(isset($_POST['nom_produit']) and isset($_POST['quantite_total']) and isset($_POST['prix']) and isset($_POST['description'])){

        if(!empty($_POST['categorie']) and !empty($_POST['sous_categorie2']) and !empty($_POST['reference'])){
            $sous_categorieC = new sous_categorieC();
            $categorieC = new categorieC();
            $l = $categorieC->recuperer($_POST['categorie']);
            $l->execute();
            foreach ($l as $key) {
                $reference_categorie=$key['reference'];
            }
            $sous_categorie = new sous_categorie($_POST['reference'],$_POST['sous_categorie2'],$_POST['reference']);
            $sous_categorieC->ajouter($sous_categorie,$reference_categorie);
            $produitC = new produitC();
            $reference_produit = $sous_categorie->getReference().'001';
            $date = date("d/m/y");
            $produit = new produit($reference_produit,$_POST['nom_produit'],$_POST['quantite_total'],$_POST['prix'],$date,$_POST['description'],$_POST['reference']);
            $produitC->ajouter($produit);
            header('Location: AJOUTER PRODUIT_1.php');
        }
        else{
            if(!empty($_POST['sous_categorie'])){
                $nom=$_POST['sous_categorie'];
                $sous_categorieC = new sous_categorieC();
                $ref = $sous_categorieC->recuperer1($nom);
                $ref->execute();
                foreach ($ref as $key) {
                    $reference_sous_categorie=$key['reference'];
                }
                $date = date("d/m/y");
                $produitC = new produitC();
                $liste=$produitC->recuperer($reference_sous_categorie);
                $r=0;
                foreach ($liste as $row) {
                    if($r<intval($row['reference']))
                        $r=$row['reference'];
                }
                $reference_produit = $r+1;
                $produit = new produit($reference_produit,$_POST['nom_produit'],$_POST['quantite_total'],$_POST['prix'],$date,$_POST['description'],$reference_sous_categorie);
                $produitC = new produitC();
                $produitC->ajouter($produit);
                header('Location: AJOUTER PRODUIT_1.php');
            }
        }
    }
	

?>