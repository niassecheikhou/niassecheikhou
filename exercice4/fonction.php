<?php
//     Exercice 4 : Générer deux nombres puis
//  faire leur permutation.On affichera les deux nombres avant
//  et après permutations.
    $a=rand(1,10);
    $b=rand(1,10);
    echo "<strong>"."le premier nombre est de : " .$a."</br>"."</br>";
    echo "<strong>"." le second nombre es de : ".$b."</br>"."</br>";
    function permitation(){
        global $a;
        global $b;
        $temp=$a;
        $a=$b;
        $b=$temp;
        return $a. " et " .$b;
    }
 ?>