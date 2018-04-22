<?php

class Panier
{
    private $Id;
    private $quantite;
    private $prix;
    private $idUtilisateur;
    private $idProduit;

    public function __construct($Id, $quantite, $prix, $idUtilisateur,$idProduit)
    {
        $this->Id = $Id;
        $this->quantite = $quantite;
        $this->prix = $prix;
        $this->idUtilisateur = $idUtilisateur;
        $this->idProduit=$idProduit;
    }

    public function getIdProduit()
    {
        return $this->idProduit;
    }

    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }


    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }


}