<!-- Exercice 7 : Entrer une date (jour/mois/année) 
à l’aide d’un formulaire ,puis déterminer 
et afficher  la date suivante et la date précédente.
Le champ est obligatoire et la date est valide. -->

<?php
        function anneBissectile(int $a):bool{
             $val=false;
            if(($a%4==0 && $a%100!=0) or ($a%400==0)){
                $val=true;
            }
            return $val;
        }
        function nombreJours(int $m,int $a):int{
            $nombre=0;
            if($m==2 && anneBissectile($a)){
                $nombre=29;
            }
            elseif($m==2 && !anneBissectile($a)){
                $nombre=28;
            }
            if($m=1 or $m=3 or $m=5 or $m=7 or $m=8 or $m=10 or $m=12){
                $nombre=31;
            }
            elseif($m=4 or $m=6 or $m=9 or $m=11){
                $nombre=30;
            }
        }
        function dateValide(int $j,int $m,int $a):bool{
            $val=false;
        if($j>=1 && $j<=nombreJours($m,$a)){
            $val=true;
        }
            return $val;
        }
        function dateSuivante(int $j,int $m,int $a):int{
            if((dateValide($j,$m,$a))&& (nombreJours($m,$a))){
                echo ($j."+".1 .$m.$a);
            }
            elseif(($j=nombreJours($m,$a) && ($m!=12)){
                echo (1.$m."+".1.$a);
            }
        }


    
    

?>
