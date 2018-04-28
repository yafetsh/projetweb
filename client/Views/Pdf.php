<?php
require '../Core/PanierCore.php' ;
require '../Entities/panier.php';
$Panier=new PanierCore();

ob_start();
?>

<style type="text/css">
    table {
        width: 100%;
        color: #717375;
        font-family: helvetica;
        line-height: 5mm;
        border-collapse: collapse;
    }
    h2 { margin: 0; padding: 0; }
    p { margin: 5px; }
    .border th {
        border: 1px solid #000;
        color: white;
        background: #000;
        padding: 5px;
        font-weight: normal;
        font-size: 14px;
        text-align: center;
    }
    .border td {
        border: 1px solid #CFD1D2;
        padding: 5px 10px;
        text-align: center;
    }
    .no-border {
        border-right: 1px solid #CFD1D2;
        border-left: none;
        border-top: none;
        border-bottom: none;
    }
    .space { padding-top: 250px; }
    .10p { width: 10%; } .15p { width: 15%; }
    .25p { width: 25%; } .50p { width: 50%; }
    .60p { width: 60%; } .75p { width: 75%; }
</style>

<page backtop="20mm" footer="page;date" >

    <page_footer>
        <hr />
        <p>Fait a Tunis, le <?php echo date("d/m/y"); ?></p>
    </page_footer>
    <img src="images/fashionmakeup_dark.PNG" alt="">
    <br>
    <br>
    <br>
    <table style="vertical-align: top;">
        <tr>
            <td class="75p">
                <strong><?php echo $_SESSION['pseudo'];?></strong><br />
                <?php echo  $_SESSION['mail']; ?>
            </td>
        </tr>
    </table>
    <table style="margin-top: 30px;" class="border">
        <thead>
        <tr>
            <th class="60p">Description</th>
            <th class="10p">Quantité</th>
            <th class="15p">Prix Unitaire</th>
            <th class="15p">Montant</th>
        </tr>
        </thead>
        <tbody>
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
             <p><?php echo $row->description; ?>
             </p>
                 </td>
                 <td>
             <span
                     class="color">x<?php echo $_SESSION['panier'][$row->reference] ; ?> </span>
                 </td>
                 <td>
                     <p class="text-right"><?php echo number_format($row->prix, 2, ',', ''); ?>
                         USD</p>
                 </td>
                 <td>
                     <p class="text-right"><?php echo number_format($row->prix, 2, ',', ''); ?>
                         USD</p>
                 </td>
             </tr>
         <?php }
     }?>
     <tr>
     <td class="space"></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
         <td colspan="2" class="no-border"></td>
         <td style="text-align: center;" rowspan="3"><strong>Total:</strong></td>
         <td>HT : <span><?php echo number_format($Panier->total(), 2, ',', ''); ?> USD</span> </td>
     </tr>
     <tr>
         <td colspan="2" class="no-border"></td>
         <td>TVA :  <span>0.00 USD</span></td>
     </tr>
     <tr>
         <td colspan="2" class="no-border"></td>
         <td>TTC : <span><?php echo number_format($Panier->total(), 2, ',', ''); ?> USD</span></td>
     </tr>
        </tbody>
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
