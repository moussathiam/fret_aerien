<?php
try{
    $bdd= new PDO('mysql:host=localhost;dbname=tarif_simulation;charset=utf8','root','');
}
catch(ExceptionPDO $e){
    '<pre>'.$e->getMesaage().'</pre>';
    die();
}
