<?php
include_once "../config.php";
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
            $etat = $p->getEtat();
            $code = $p->getCode();
            $req->bindvalue(':quantite', $quantite);
            $req->bindvalue(':IdPanier', $idpanier);
            $req->bindvalue(':etat', $etat);
            $req->bindvalue(':code', $code);
            $req->execute();
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }


    function AfficherCommande()
    {
        $c = config::getConnexion();
        $sql = "SELECT * FROM commande";
        try {
            $liste = $c->query($sql);
            return $liste;
        } catch (Exception $c) {
            die('Erreur : ' . $c->getMessage());
        }
    }

    public function ModifierCommande($p,$id)
    {
        $c = config::getConnexion();
        $sql = "UPDATE commande SET quantite=:quantite,IdPanier=:idpanier WHERE id=:id";
        try {
            $req = $c->prepare($sql);

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
        $sql = "DELETE FROM commande where id= :id";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':id', $p);
            $req->execute();
        } catch (Exception $c) {
            die('Erreur : ' . $c->getMessage());
        }

    }

    function afficherquantite($p)
    {
        $c = config::getConnexion();
        $sql = "SELECT * FROM commande where id=:id";
        try {
            $req = $c->prepare($sql);

            $req->bindValue(':id', $p);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $c) {
            die('Erreur : ' . $c->getMessage());
        }
    }

    function rechercher($p)
    {
        $c = config::getConnexion();
        $sql = "SELECT * FROM commande where idpanier=:id";
        try {
            $req = $c->prepare($sql);

            $req->bindValue(':id', $p);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $c) {
            die('Erreur : ' . $c->getMessage());
        }

    }

    function idscommande($p)
    {
        $c = config::getConnexion();
        $sql = "SELECT * FROM commande where id=:id";
        try {
            $req = $c->prepare($sql);

            $req->bindValue(':id', $p);
            $req->execute();
            return $req;
        } catch (Exception $c) {
            die('Erreur : ' . $c->getMessage());
        }

    }

    function commandenonpayer($p)
    {
        $c = config::getConnexion();
        $sql = "SELECT * FROM commande where etat=0 and idpanier=:id";
        try {
            $req = $c->prepare($sql);

            $req->bindValue(':id', $p);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $c) {
            die('Erreur : ' . $c->getMessage());
        }
    }

    function modifieretat($p)
    {
        $c = config::getConnexion();
        $sql = "UPDATE commande SET etat=1 WHERE idpanier=:id";
        try {
            $req = $c->prepare($sql);
            $req->bindvalue(':id', $p);
            $req->execute();
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }
}
?>