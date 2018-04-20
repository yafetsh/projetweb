<?php
  include_once "../../Entities/image.php";
  include_once "../../Core/imageC.php";
  $imageC = new imageC();
  echo($_POST['chemin']);
      $imageC->supprimer($_POST['chemin']);
      header('location: GESTION IMAGE.php');

  ?>