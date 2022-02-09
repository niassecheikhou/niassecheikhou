<?php
//     Exercice 4 : Générer deux nombres puis
//  faire leur permutation.On affichera les deux nombres avant
//  et après permutations.
    $a=rand(1,10);
    $b=rand(1,10);
    echo "le premier nombre est de " .$a."</br>";
    echo " le second nombre es de ".$b."</br>";
    function permitation(){
        global $a;
        global $b;
        $temp=$a;
        $a=$b;
        $b=$temp;
        return $a."et".$b;
    }
 ?>