<?php 
        session_start();
        include "fonction.php";

       
        if(isset($_POST["valide"])){

            $nbre=$_POST["nbr"];
        
            if((is_numeric($nbre)) && ($nbre>0)){
                $_SESSION['post']=$_POST;
                header('location:index.php');
            }
            else{
                header('location:index.php');
            }
        }
?>