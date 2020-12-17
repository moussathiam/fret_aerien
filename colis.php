<?php
Class Colis
{
 protected $poids;
 protected $compagnie;
 protected $destination;
 const CGC= 1250;
 const TX= 15;
 const  GE= 1260;
 const  CHC= 15000;
 const   GT= 2000;
 const   SCC= 75;
    
   public function tarif_ht($compagnie)
   {
       $tarif_ht=0;
       
       if($compagnie==1){
                $tarif_ht=50000;
                return $tarif_ht;
       }
       else if($compagnie==2){
              $tarif_ht=60000;
              return $tarif_ht;
       }
       else
           return $tarif_ht;

   }

   public function tarif_tx($poids)
   {
       $tarif_tx=self::CGC+ self::GE+ self::CHC+ self::GT+ self::TX*$poids+ self::SCC*$poids;
       return $tarif_tx;
   }
   public function tarif_ttc($compagnie, $poids)
   {
      return $this->tarif_ht($compagnie)+$this->tarif_tx($poids);

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
}