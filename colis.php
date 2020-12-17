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

  
   /*public function pays()
   {
       require 'connexion.php';
       $liste= $bdd->query('SELECT DISTINCT(pays) FROM destinations ');
       while($pays=$liste->fetch()){
             return $liste_pays=json_encode($pays);
       }
       //return $pays=json_encode($liste->fetch());
       $liste->closeCursor();
   }
  public function aeroport()
   {
        require 'connexion.php';
        $liste= $bdd->query("SELECT aeroport, pays FROM destinations WHERE pays='$this->destination'") or die(print_r($bdd->errorInfo()));
        while($aeroports=$liste->fetch()){
           return $list_aeroports= json_encode($aeroports['aeroport']) ;
        }
        $liste->closeCursor();
    }*/
