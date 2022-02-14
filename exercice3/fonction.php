<?php
        $nombre1=rand(1,10);
        $nombre2=rand(1,10);
        echo "<i>"."<strong>"."le premier nombre est de " .$nombre1."<br/>"."<br/>";
        echo "<i>"."<strong>"."le deuxieme nombre est de " .$nombre2."<br/>"."<br/>";
         function somme(){
            global $nombre1;
            global $nombre2;
            $somme=($nombre1+$nombre2);
            return $somme;
        }
        function exponentiel(){
            global $nombre1;
            global $nombre2;
            $exponentiel=pow($nombre1,$nombre2);
            return $exponentiel;
        }
        function difference(){
            global $nombre1;
            global $nombre2;
            $difference=$nombre1-$nombre2;
            return $difference;
        }
        function produit(){
            global $nombre1;
            global $nombre2;
            $produit=$nombre1*$nombre2;
            return $produit;
        }
        function modilo(){
            global $nombre1;
            global $nombre2;
            $modilo= ($nombre1%$nombre2);
            return $modilo;
        }
        function division(){
            global $nombre1;
            global $nombre2;
            $division= ($nombre1/$nombre2);
            return $division;
        }
        function carre(){
            global $nombre1;
            global $nombre2;
            $carre= ($nombre1*$nombre2);
            return $carre;
        }       
?>