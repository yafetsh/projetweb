<?PHP
    include "../../Entities/livraison.php";
    include "../../Core/livraisoncore.php";
   

    if(isset($_GET['id'])){
      $lC=new livraisoncore();
      $l=$lC->reccupererinformations($_GET["id"]);
      foreach ($l as $row) {
         $pseudoLivreur=$row['pseudoLivreur'];
        $id=$row['id'];
    
      }
    }
      include "../../Core/livreurcore.php";
$livreur3C=new livreurcore();
$listePseudos=$livreur3C->afficherPseudoslivreurs();

  ?>
<html>
<form method="GET" action="aff_livraison.php">
  <table>
<caption>Choisir un livreur</caption>
<tr>
<td>ID_Livraison</td>
<td><input disabled type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>

</table>

  <table>
    <tr>
      <td>Pseudo_livreur</td>
      <td>
        <select >
              <option><?PHP echo $pseudoLivreur ?></option>
          <?PHP
              foreach($listePseudos as $row){
                ?>
                <option>
                <?PHP echo $row['pseudo']; ?>
              </option>
              
          <?PHP
            }
?>
  </td>
  </tr>
          </select>
      
    

  </table>

<table>
<tr>
<td><input type="submit" name="modif" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>

                  </div>
                </div>
              </div>
            </div>
          </div>
              </div>


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>