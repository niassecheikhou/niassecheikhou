<?php 
$cote=rand(1,10);
echo "le coté du carre est de: ".$cote."<br>";
function perimetre(){
        global $cote;
    $perimetre=$cote*4;
    return $perimetre;
}
function surface(){
    global $cote;
    $surface=$cote*$cote;
    return $surface;
}
function diagonale(){
    global $cote;
    $diagonal=sqrt(($cote*$cote)+($cote*$cote));
    return $diagonal;
}
?>