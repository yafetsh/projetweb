<?PHP
    include "../../Entities/livraison.php";
    include "../../Core/livraisoncore.php";
   

    if(isset($_GET['id'])){
      $lC=new livraisoncore();
      $l=$lC->reccupererinformations($_GET["id"]);
      foreach ($l as $row) {
        $id=$row['id'];
      $idUtilisateur=$row['idUtilisateur'];
      $pseudoLivreur=$row['pseudoLivreur'];

      }
    }
      
  ?>

  <form method="POST">
    <table>
<caption>Modifier Livreur</caption>
<tr>
<td>Id_Livraison</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Id_Utilisateur</td>
<td><input type="text" name="idUtilisateur" value="<?PHP echo $idUtilisateur ?>"></td>
</tr>
<tr>
<td>Pseudo_Livreur</td>
<td><select>
          <?PHP
           include "../../Core/livreurcore.php";
          $livreur3C=new livreurcore();
          $listePseudos=$livreur3C->afficherLivreursselondisponibilité();
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
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
if (isset($_POST['modif'])) {
      $livraison=new livraison($_POST['id'],$_POST['idUtilisateur'],$_POST['pseudoLivreur']);
      $lC->modifierlivraison($livraison,$_POST['id_ini']);
      echo $_POST['id_ini'];
    header('Location: afficherlivraisons.php');
  }
?>
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