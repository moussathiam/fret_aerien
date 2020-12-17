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
    public function __construct($poids, $compagnie, $destination)
    {
        $this->poids= $poids;
        $this->compagnie= $compagnie;
        $this->destination= $destination;
        
    }
    public function getPoids()
    {
        return $this->poids;
    }
    public function getCompagnie()
    {
        return $this->compagnie;
    }
    public function getDestination()
    {
        return $this->destination;
    }
    

/*setters*/
    public function setPoids()
    {
        $this->poids= $poids;
    }
    public function setCompagnie()
    {
        $this->compagnie= $compagnie;
    }
    public function setDestination()
    {
        $this->destination= $destination;
    }
    
   public function tarif_ht()
   {
       $tarif_ht=0;
       
       if($this->compagnie !="aire senegal"){
                return $tarif_ht=60000;
       }
       else if($this->compagnie !="aire france"){
        return $tarif_ht=50000;
       }
       else
           return $tarif_ht;

   }

   public function tarif_tx()
   {
       return $tarif_tx=self::CGC+ self::GE+ self::CHC+ self::GT+ self::TX*$this->poids+ self::SCC*$this->poids;
   }
   public function tarif_ttc()
   {
     $tarif_ttc= 0;
     if($this->compagnie = "aire senegal")
     {
       $tarif_ttc=50000+self::CGC+ self::GE+ self::CHC+ self::GT+ self::TX*$this->poids+ self::SCC*$this->poids;
       return $tarif_ttc;
    }
     else
      {
        $tarif_ttc=60000+self::CGC+ self::GE+ self::CHC+ self::GT+ self::TX*$this->poids+ self::SCC*$this->poids;
        return $tarif_tcc;
      }

   }
   public function pays()
   {
       require 'connexion.php';
       $liste= $bdd->query('SELECT DISTINCT(pays) FROM destinations ');
       while($list_pays=$liste->fetch()){
             return $list_pays['pays'];
       }
       $liste->closeCursor();
   }
  public function aeroport()
   {
        require 'connexion.php';
        $liste= $bdd->query("SELECT aeroport, pays FROM destinations WHERE pays='$this->destination'") or die(print_r($bdd->errorInfo()));
        while($list_pays=$liste->fetch()){
           return $list_pays['aeroport'] ;
        }
        $liste->closeCursor();
    }
}