<?php
    function siChampsValide(int $nombre): void {


        for($i = 1; $i <= $nombre; $i++){

         echo "<input type='text' placeholder =\" champ n° $i\"><br><br>";
        }

    }

?>