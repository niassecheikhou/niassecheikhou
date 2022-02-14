<?php 
        session_start();
        include "fonction.php";

       
        if(isset($_POST["valide"])){

            $nombre=$_POST["nombre"];
        
            if((is_numeric($nombre)) && ($nombre>0)){
                $_SESSION['post']=$_POST;
            }
            else{
                $_SESSION["erreur"]="veuillez revoir  votre saisie";
             }
            header('location:index.php');  
            
        }
?>