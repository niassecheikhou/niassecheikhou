<?php
        include "fonction.php";
   $jour=$_POST["jour"];
   $mois=$_POST["mois"];
   $annee=$_POST["annee"];
   $rechercher=$_POST["envoyer"];
    if (isset($rechercher)){
        if((is_numeric($jour)) && (!(is_numeric($mois))) && (is_numeric($annee))){
                echo " valide";
         }
         else{
             echo "inavalide";
         }
    }
?>