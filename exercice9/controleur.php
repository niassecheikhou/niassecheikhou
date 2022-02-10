<?php
    include "fonction.php";
    $nombreN=$_POST["nombreN"];
    $envoyer=$_POST["envoyer"];
        if (is_numeric($nombreN) && $nombreN>0){
                
                tableMultiplication($nombreN);
        }
        else{
            echo "invalide";
        }
?>