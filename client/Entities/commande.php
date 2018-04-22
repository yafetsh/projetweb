<?php

class commande
{
    private $quantite;
    private $IdPanier;
    private $dateC;
    private $etat;
    private $code;
    public function __construct($quantite, $IdPanier)
    {
        $this->quantite = $quantite;
        $this->IdPanier = $IdPanier;
        $this->etat = 0;
        $this->code = rand();

    }

    /**
     * @return false|string
     */
    public function getDateC()
    {
        return $this->dateC;
    }

    /**
     * @param false|string $dateC
     */
    public function setDateC($dateC)
    {
        $this->dateC = $dateC;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;
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
