<?php
include_once "../config.php";

class PanierCore
{

    public function __construct()
    {
        if (!isset($_SESSION))
            session_start();
        if (!isset($_SESSION['panier']))
            $_SESSION['panier'] = array();
        if (isset($_GET['delPanier']))
            $this->del($_GET['delPanier']);
    }
public function count()
{
    return array_sum($_SESSION['panier']);
}
    public function add($produit_id)
    {
if (isset($_SESSION['panier'][$produit_id]))
        $_SESSION['panier'][$produit_id]++;
else
    {
    $_SESSION['panier'][$produit_id]=1;
    }
    }

    public function del($produit_id)
    {
        unset($_SESSION['panier'][$produit_id]);
    }

    public function total()
    {
        $total=0;
        $ids = array_keys($_SESSION['panier']);
        if (empty($ids)) {
            $prod = array();

        } else {
            $prod =$this->AfficherPanierSession("select * from produit where reference IN (" . implode(",", $ids) . ")");
            foreach ($prod as $row) {
$total+=$row->prix * $_SESSION['panier'][$row->reference];
            }
        }
        return $total;
    }
    function AjouterPanier($p)
    {
        $sql = "INSERT INTO panier (id,quantite,prix,idUtilisateur) VALUES (:id,:quantite,:prix,:idUtilisateur)";

        $db = config::getConnexion();

        try {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $db->prepare($sql);

            $id = $p->getId();
            $quantite = $p->getQuantite();
            $prix = $p->getPrix();
            $idut = $p->getIdUtilisateur();

            //PDOStatemnt :: bindvalue() , la variable est liée en tant que référence et ne sera evaluée qu'au moment de l'appel de PDOStatement :: exucute () .

            $req->bindvalue(':id', $id);
            $req->bindvalue(':quantite', $quantite);
            $req->bindvalue(':prix', $prix);
            $req->bindvalue(':idUtilisateur', $idut);
            $req->execute();
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }

    function AfficherPanier()
    {
        $c=config::getConnexion();
        $sql="SELECT * FROM Panier";
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
    function AfficherPanierSession($sql,$data=array())
    {
        $c=config::getConnexion();

        try {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $c->prepare($sql);
            $req->execute($data);
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    function AfficherProduits()
    {
        $sql = "select * from produit";

        $db = config::getConnexion();

        try {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $db->prepare($sql);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    function supprimer()
    {

    }

}
