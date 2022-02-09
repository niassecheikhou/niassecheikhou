    <?php
             $longueur=rand(7,10);
            $largueur=rand(2,6);
            echo "la longueur est de".$longueur."<br/>";
            echo "la largueur est de".$largueur."<br/>";
                function perimetre(){
          global $longueur;
          global $largueur;
          $perimetre=($longueur+$largueur)*2;
          return $perimetre;
            }
            function surface(){
                 global $longueur;
                 global $largueur;
                $surface=($longueur*$largueur);
              return $surface;
             }
            function diagonale(){
          global $longueur;
          global $largueur;
            $diagonale=sqrt(($longueur*$largueur)+($longueur*$largueur));
        return $diagonale;
         }
     ?>