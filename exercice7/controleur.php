<?php
        session_start();
        include "fonction.php";

        if(isset($_POST['envoyer'])){
            $jour=$_POST["jour"];
            $mois=$_POST["mois"];
            $annee=$_POST["annee"];
            if(is_numeric($jour) && is_numeric($mois) && is_numeric($annee)){
                $_SESSION['post']=$_POST;
                 header('location:index.php');
            }else{
                header('location:index.php');
            
            }

        }
//    $j=$_POST["jours"];
//    $m=$_POST["mois"];
//    $a=$_POST["annee"];
//    $rechercher=$_POST["envoyer"];
//     if (isset($rechercher)){
//         echo "nombe";
//         if((is_numeric($j)) ){
                
//                 echo "valider";
                
//          }
//          else{
//              echo "inavalide";
             
//          }
//     }
?>