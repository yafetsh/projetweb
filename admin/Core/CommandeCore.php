<?php
include '../../config.php';
class CommandeCore
{
    function AjouterCommande($p)
    {
        $sql = "INSERT INTO commande (id,quantite,idpanier,dateCommande,etat,Code) VALUES (DEFAULT ,:quantite,:IdPanier,CURRENT_TIMESTAMP,:etat,:code)";

        $db = config::getConnexion();

        try {
            $req = $db->prepare($sql);

            $quantite = $p->getQuantite();
            $idpanier = $p->getIdPanier();

            $req->bindvalue(':id', $id);
            $req->bindvalue(':quantite', $quantite);
            $req->bindvalue(':IdPanier', $idpanier);
            $req->execute();
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }

    function AfficherCommande()
    {
        $c=Config::getConnexion();
        $sql="SELECT * FROM commande";
        try
        {
            $liste=$c->query($sql);
            return $liste;
        }
        catch (Exception $c)
        {
            die('Erreur : '.$c->getMessage());
        }
    }
    public function ModifierCommande($p)
    {
        $c =Config::getConnexion();
        $sql = "UPDATE commande SET quantite=:quantite,IdPanier=:idpanier WHERE id=:id";
        try {
            $req = $c->prepare($sql);

            $id = $p->getId();
            $quantite = $p->getQuantite();
            $idpanier = $p->getIdPanier();

            $req->bindvalue(':id', $id);
            $req->bindvalue(':quantite', $quantite);
            $req->bindvalue(':idpanier', $idpanier);
            $req->execute();
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    function SupprimerCommande($p)
    {
        $sql="DELETE FROM commande where id= :id";
        $db = Config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $req->bindValue(':id',$p);
            $req->execute();
        }
        catch (Exception $c)
        {
            die('Erreur : '.$c->getMessage());
        }

    }
    function idscommande($p)
    {
        $c=Config::getConnexion();
        $sql="SELECT * FROM commande where id=:id";
        try
        {
            $req=$c->prepare($sql);
            $req->bindValue(':id',$p);
            $req->execute();
            return $req;
        }
        catch (Exception $c)
        {
            die('Erreur : '.$c->getMessage());
        }
    }

    function commandepayer()
    {
        $c = config::getConnexion();
        $sql = "SELECT * FROM commande where etat=1";
        try {
            $req = $c->prepare($sql);


            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $c) {
            die('Erreur : ' . $c->getMessage());
        }
    }
}

?>