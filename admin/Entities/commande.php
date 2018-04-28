<?php

class commande
{
    private $Id;
    private $quantite;
    private $IdPanier;

    public function __construct($Id, $quantite, $IdPanier)
    {
        $this->Id = $Id;
        $this->quantite = $quantite;
        $this->IdPanier = $IdPanier;
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


    public function getIdPanier()
    {
        return $this->IdPanier;
    }

    public function setIdPanier($IdPanier)
    {
        $this->IdPanier = $IdPanier;
    }

}
