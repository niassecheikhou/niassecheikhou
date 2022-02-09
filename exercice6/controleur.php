<?php
    include ('fonction.php');
    //recuperation des donneés
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
     $envoyer= $_POST["envoyer"];
    //la validité du bouton
    if(isset($envoyer)){
            //controle de saissie
          if((is_numeric($a))&&(is_numeric($b))&&(is_numeric($c))){
            // echo "champs valide";
            equationDuSecondDegre( $a, $b, $c);

        }
        else{
            // echo "champs invalide";
        }
        if((empty($a))or(empty($b))or(empty($c))){
            // echo " champs laisser vide";
       } 
    }
           

            
    
     
    
    
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
 ?>