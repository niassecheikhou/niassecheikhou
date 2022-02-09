<!-- Exercice 6:  Entrer les nombres a,b et  c 
à l’aide d’un formulaire puis donner 
les solutions de  l'équation ax2+bx+c=0.
Les trois champs sont obligatoires. -->

<?php 
        function siValeurNumerique($val):bool{
            return is_numeric($val);
        }
        function sivaleurVide($val):bool{
            return empty($val);
        }
        function equationDuSecondDegre(int $a,int $b,int $c){
            if ($a==0) {
                if ($b==0){
                    if ($c==0){
                        echo "l'equation admet une infinité de solution";
                        
                    }
                    else {
                        echo "l'equation n'admet pas de solution";
                    }
                }
                else { 
                    echo "l'equation admet une unique solution"."<br>"."X=".(-1*$c/$b);
                    
                }
            }
            else {
                $d= (($b*$b)-(4*$a*$c));
                if ($d==0) {
                    $x0=(-1*$b/2*$a);
                    echo "l'equation admet une solution double<br>"."<br>=".$x0."<br>";
                }
                elseif($d>0){
                    $x1= (-1*$b-sqrt($d))/2*$a;
                    $x2= (-1*$b+sqrt($d))/2*$a;
                    echo "les equations sont<br> "."X1=".$x1."<br>"."X2=".$x2."<br>";
                }
                else{
                    echo "l'equation n'admet pas de solution dans R";
                }
            }
            }
            


?>