<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?PHP
  include "../Entities/reservation.php";
  include "../Core/ReservationCore.php";
  if (isset($_GET['id'])){
    $rC=new ReservationCore();
    $r=$rC->reccupererinformations($_GET["id"]);
    foreach($r as $row){
      $id=$row['id'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $telephone=$row['telephone'];
      $type=$row['type'];
      $date=$row['date'];
    }}

  ?>
  <body>

    <form role="form" id="contact_form" class="contact-form" method="GET" action="modif_res.php" >
        <div class="row">
          <div class="col-md-6">
            <ul class="row">
              <li class="col-sm-12">
                <label> Nom:*
                  <input type="text" class="form-control" name="nom" value="<?PHP echo $nom ?>">
                  <?php if (!empty($nomError)): ?>
                      <span class="help-inline" style="color:Red"><?php echo $nomError;?></span>
                  <?php endif; ?>
                </label>
              </li>
              <li class="col-sm-12">
                <label> Prénom:*
                  <input type="text" class="form-control" name="prenom" value="<?PHP echo $prenom ?>" >
                  <?php if (!empty($prenomError)): ?>
                      <span class="help-inline" style="color:Red"><?php echo $prenomError;?></span>
                  <?php endif; ?>
                </label>
              </li>
              <li class="col-sm-12">
                <label> Numéro téléphone:*
                  <input type="text" class="form-control" name="telephone" value="<?PHP echo $telephone ?>">
                  <?php if (!empty($telephoneError)): ?>
                      <span class="help-inline" style="color:Red"><?php echo $telephoneError;?></span>
                  <?php endif; ?>
                </label>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="row">
              <li class="col-sm-12">
                <label>
            Type de maquillage:
            <select  class="form-control" name="type" >
              <option value="<?PHP echo $type ?>" selected="selected" hidden><?PHP echo $type ?></option>
              <option value="Maquillage de jour">Maquillage de jour</option>
              <option value="Maquillage de soirée">Maquillage de soirée</option>
            <option value="Maquillage de mariage">Maquillage de mariage</option></select></label>  </li>
              <li class="col-sm-12">
                <label>Date et l'heure:*
                  <input type="datetime" class="form-control" name="date" value="<?PHP echo $date ?>" >
                  <?php if (!empty($dateError)): ?>
                      <span class="help-inline" style="color:Red"><?php echo $dateError;?></span>
                  <?php endif; ?>


                </label>
    </li>

              <li class="col-sm-12 no-margin">
                <input type="submit" value="modifier" name="modif" class="btn" id="btn_submit"></button> <p>
              </li>
              <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>

            </ul>
          </div>
        </div>

    </form>


  </body>
</html>
