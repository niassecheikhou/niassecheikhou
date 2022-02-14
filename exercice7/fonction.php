<!-- Exercice 7 : Entrer une date (jour/mois/année) 
à l’aide d’un formulaire ,puis déterminer 
et afficher  la date suivante et la date précédente.
Le champ est obligatoire et la date est valide. -->

<?php
        //verification de l'annee saisie ///

        function anneBissectile(int $a):bool{
             $val=false;
            if(($a%4==0 && $a%100!=0) or ($a%400==0)){
                $val=true;
            }
            return $val;
        }
                // dermination du nombre de jour du mois corespondant///

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
            return $nombre;
        }
                // verification de la validite de la date// 

        function dateValide(int $j,int $m,int $a):bool{
            $val=false;
        if($j>=1 && $j<=nombreJours($m,$a)&&$m>=1&&$m<=12){
            $val=true;
        }
            return $val;
        }
                //  donner de la date suivante//

        function dateSuivante(int $j,int $m,int $a):void{
            if((dateValide($j,$m,$a)) ){
                if($j==nombreJours($m,$a)&&($m!=12)){
                    echo ("1 - ".($m+1)." - ".$a); 
                }
                elseif(($j==nombreJours($m,$a)) && ($m==12)){
                    echo ("1-"."1-".($a+1));
                }
                elseif($j<nombreJours($m,$a)){
                    echo (($j+1)."-".$m."-".$a);
                }
            }
        }
                // donner de la date precedante// 
                
        function datePrecedante($j,$m,$a):void{
            if ((dateValide($j, $m, $a))) {
                if ($j>1 && $j<=nombreJours($m,$a)){
                    echo(($j-1)."-".$m."-".$a);
                } elseif ( ($j==1) && ($m==5 or $m==7 or $m==10 or $m==12)) {
                    echo("30"."-".($m-1)."-".$a);
                }
                elseif($j==1 && $m==1){
                    echo "31- 12 - ".($a-1);
                }
                elseif($j==1 && $m==3 && anneBissectile($a)){
                   echo  "29 - 2 - ".$a;
                }
                elseif($j==1 && $m==3 && !anneBissectile($a)){
                    echo "28 - 2 - ".$a;
                }
                elseif($j==1 && ($m==4 or $m==6 or $m==8 or $m==9 or $m==11)){
                    echo " 31- ".($m-1)." - ".($a);
                }
             }
                
         }
         
         
?>