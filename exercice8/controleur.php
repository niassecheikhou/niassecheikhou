<?php
    include "fonction.php";
    $nombre=$_POST["nombre"];
    $rechercher=$_POST["rechercher"];
     if(isset($rechercher)){
         if(is_numeric($nombre)&&($nombre>0)&&($nombre!=0)){
             
             nombrePositif($nombre);
         }
         else{
             echo"veuillez entrer un nombre positif";
         }
     }

?>