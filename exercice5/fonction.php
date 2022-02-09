<!-- Exercice 5 : Point: Générer deux points puis calculer
 et afficher la distance entre les deux points.
 Un point est caractérisé par son abscisse et 
  son Ordonnée. -->

  <?php 
            $x1=rand(0,9);
            $y1=rand(2,8);
            $x2=rand(0,6);
            $y2=rand(5,1);
            // echo "la valeur de x1 est de  ".$x1."</br>";
            // echo "la valeur de y1 est de  ".$y1."</br>";
            // echo "la valeur de x2 est de  ".$x2."</br>";
            // echo "la valeur de y2 est de  ".$y2."</br>";
            function distance(){
                global $x1;
                global $y1;
                global $x2;
                global $y2;
                $distance=sqrt((($x2-$x1)*($x2-$x1))+(($y2-$y1)*($y2-$y1)));
                return $distance;
            }
  ?>
