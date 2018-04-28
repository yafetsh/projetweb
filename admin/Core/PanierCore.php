<?php
include_once "../../config.php";

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
        if (isset($_POST['panier']['quantite']))
            $this->actualiser();
    }
    public function actualiser()
    {

        foreach ($_SESSION['panier'] as $produit_id => $quantite) {
            $quan=$this->rechercheprod($produit_id);
            if (isset($_POST['panier']['quantite'][$produit_id]) && $quan[0]->quantite >= $_POST['panier']['quantite'][$produit_id]) {

                $pries=$this->prixprod($produit_id);

                $paniertable=new Panier(1,$_POST['panier']['quantite'][$produit_id],$pries[0]->prix*($_POST['panier']['quantite'][$produit_id]),1,$produit_id);

                $this->ModifierPanier($paniertable);

                $_SESSION['panier'][$produit_id] = $_POST['panier']['quantite'][$produit_id];

            }
            else echo '<script>alert("Stock epuiser");</script>';

        }
    }
public function count()
{
    return array_sum($_SESSION['panier']);
}

    public function add($produit_id)
    {
        $pries=$this->prixprod($_GET['reference']);
        $verif=$this->recherche($_GET['reference'],1);
        $quantite=$_SESSION['panier'][$produit_id];
        if (empty($_SESSION['id']))
        $paniertable=new Panier(2,$quantite+1,$pries[0]->prix*($quantite+1),1,$_GET['reference']);
        if ($verif==array())
            $this->AjouterPanier($paniertable);
        else {

            $this->ModifierPanier($paniertable);
        }
            if (isset($_SESSION['panier'][$produit_id])) {
    $_SESSION['panier'][$produit_id]++;

}
        else
    {
    $_SESSION['panier'][$produit_id]=1;
    }

    }

    public function del($produit_id)
    {
        unset($_SESSION['panier'][$produit_id]);

        $this->SupprimerPanier($_GET['delPanier']);
    }

    function total()
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
        $sql = "INSERT INTO panier (id,quantite,prix,idUtilisateur,idProduit) VALUES (DEFAULT ,:quantite,:prix,:idUtilisateur,:idProd)";

        $db = config::getConnexion();

        try {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $db->prepare($sql);
            $quantite = $p->getQuantite();
            $prix = $p->getPrix();
            $idut = $p->getIdUtilisateur();
            $prod= $p->getIdProduit();

            //PDOStatemnt :: bindvalue() , la variable est liée en tant que référence et ne sera evaluée qu'au moment de l'appel de PDOStatement :: exucute () .

            $req->bindvalue(':quantite', $quantite);
            $req->bindvalue(':prix', $prix);
            $req->bindvalue(':idUtilisateur', $idut);
            $req->bindvalue(':idProd', $prod);
            $req->execute();
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }

    function AfficherPanier($p)
    {
        $c=config::getConnexion();
        $sql="SELECT * FROM Panier where idUtilisateur=:id";
        try
        {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $c->prepare($sql);
            $req->bindvalue(':id', $p);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Exception $c)
        {
            die('Erreur : '.$c->getMessage());
        }
    }
    function AfficherPanierid($idut)
    {
        $c=config::getConnexion();
        $sql="SELECT * FROM Panier where idUtilisateur=:idut";
        try
        {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $c->prepare($sql);
            $req->bindvalue(':idut', $idut);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Exception $c)
        {
            die('Erreur : '.$c->getMessage());
        }
    }
 function ModifierPanier($p)
    {
        $c = config::getConnexion();
        $req = "UPDATE panier SET quantite=:quantite,prix=:prix WHERE idProduit=:idProd AND idUtilisateur=:idut";
        try {
            $req = $c->prepare($req);

            $quantite = $p->getQuantite();
            $prix = $p->getPrix();
            $idut = $p->getIdUtilisateur();
            $prod= $p->getIdProduit();

            $req->bindvalue(':quantite', $quantite);
            $req->bindvalue(':prix', $prix);
            $req->bindvalue(':idut', $idut);
            $req->bindvalue(':idProd', $prod);
            $req->execute();
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    function SupprimerPanier($p)
    {
        $sql="DELETE FROM panier where idProduit= :id";
        $db = config::getConnexion();
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
    function prixprod($ref)
    {
        $sql = "select prix from produit where reference=:ref";

        $db = config::getConnexion();

        try {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $db->prepare($sql);
            $req->bindValue(':ref',$ref);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    function recherche($p,$ut)
    {
        $sql = "select * from panier where idProduit=:id and idUtilisateur=:idut";

        $db = config::getConnexion();

        try {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $db->prepare($sql);
            $req->bindValue(':id',$p);
            $req->bindValue(':idut',$ut);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    function rechercheprod($p)
    {
        $sql = "select * from produit where reference=:id";

        $db = config::getConnexion();

        try {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $db->prepare($sql);
            $req->bindValue(':id',$p);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    function recherchequantite($p)
    {
        $sql = "select * from panier where id=:id";

        $db = config::getConnexion();

        try {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $db->prepare($sql);
            $req->bindValue(':id',$p);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    public function Modifierquantite($q,$prod)
    {
        $c = config::getConnexion();
        $req = "UPDATE produit SET quantite=:quantite WHERE reference=:idProd";
        try {
            $req = $c->prepare($req);

            $req->bindvalue(':quantite', $q);
            $req->bindvalue(':idProd', $prod);
            $req->execute();
        }
        catch (Exception $e)
        {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    function rechercheidprod($idut)
    {
        $sql = "select * from panier where idUtilisateur=:idut";

        $db = config::getConnexion();

        try
        {
            //prepare : preparer une instruction SQL pour l'execution
            $req = $db->prepare($sql);
            $req->bindvalue(':idut', $idut);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Exception $e)
        {
            echo 'ERREUR' . $e->getMessage();
        }
    }
    function notif()
    {
        $quan=$this->rechercheidprod($_SESSION['id']);
        $a=0;
        foreach ($quan as $row)
        {
            $a+=$row->quantite;

        }
        return $a;
    }

}
