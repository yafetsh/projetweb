<?php
require '../Core/PanierCore.php' ;
require '../Entities/panier.php';
$Panier=new PanierCore();
ob_start();
?>
<style type="text/css">
    p {
        font-weight: bold;
        color: #272727;
        border-top: 1px solid #ebebeb;
        padding: 10px 0;
        font-size: 12px;
        margin: 0px;
    }
    span {
        float: right;
    }
    order-detail {
        margin-top: 40px;
        margin-bottom: 30px;
    }
    h5 {
        font-weight: bold;
        color: #af5875;
        margin: 0px;
    }
    table
    {
        width: 100%;
        border-bottom: 1px solid #ddd;
    }
</style>
<page backtop="20mm" >
 <table border="1" >
     <tr >
         <td>
             <p>Produit</p>
         </td>
         <td>
             <p>total</p>
         </td>
     </tr>
     <?php
     $ids=array_keys($_SESSION['panier']);
     if(empty($ids))
     {
         $prod=array();

     }
     else {
         $prod = $Panier->AfficherPanierSession("select * from produit where reference IN (" . implode(",", $ids) . ")");
         foreach ($prod as $row) {
             ?>
             <tr>
                 <td>
             <p><?php echo $row->description; ?><span
                         class="color"> x<?php echo $_SESSION['panier'][$row->reference] ; ?> </span>
             </p>
                 </td>
                 <td>
             <p>COLOR: BLACK </p>

             <p class="text-right"><?php echo number_format($row->prix, 2, ',', ''); ?>
                 TND</p>
                 </td>
             </tr>
         <?php }
     }?>
     <tr>
         <td><p>CART SUBTOTAL <span><?php echo number_format($Panier->total(), 2, ',', ''); ?> TND</span></p> </td>
         <td> <p>ORDER TOTAL <span><?php echo number_format($Panier->total(), 2, ',', ''); ?> TND</span></p></td>
     </tr>


 </table>
</page>
<?php
$content=ob_get_clean();

require ('../Core/html2pdf/html2pdf.class.php');
try {
    $pdf = new HTML2PDF('p', 'A4', 'fr');
    $pdf->pdf->SetDisplayMode('fullpage');
    $pdf->writeHTML($content);
    $pdf->Output('test.pdf');
}
catch (HTML2PDF_exception $e){
    die($e);
}

?>
