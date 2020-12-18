<?php
  $_POST["fonction"]();

    function tarif_ht()
   {
      $compagnie = $_POST["compagnie"];
       $tarif_ht=0;
      if($compagnie==1)
      {
          $tarif_ht=50000;
          echo $tarif_ht;
      }
      if($compagnie==2)
      {
       $tarif_ht=60000;
          echo $tarif_ht;
      }
   }

  function tarif_ttc()
  {
    $poids = $_POST["poids"];
     $compagnie = $_POST["compagnie"];
        $CGC= 1250;
        $TX= 15;
        $GE= 1260;
        $CHC= 15000;
        $GT= 2000;
        $SCC= 75;
       $tarif_tx = $CGC + $GE + $CHC + $GT + $TX*$poids + $SCC*$poids;

       $tarif_ht=0;
      if($compagnie==1)
      {
          $tarif_ht=50000;
      }
      if($compagnie==2)
      {
        $tarif_ht=60000;
      }
    echo $tarif_ht +  $tarif_tx;
  }


  function pays()
   {
      require 'connexion.php';
      $liste= $bdd->query('SELECT DISTINCT(pays) FROM destinations ');
      $pays=$liste->fetchAll();
      echo json_encode($pays);
       
       //return $pays=json_encode($liste->fetch());
       $liste->closeCursor();
   }
  
   function aeroport()
   {
      $pays = $_POST["pays"];
      require 'connexion.php';
      $liste= $bdd->query("SELECT aeroport, pays FROM destinations WHERE pays = '$pays'") or die(print_r($bdd->errorInfo()));
      echo json_encode($liste->fetchAll());
      $liste->closeCursor();
    }